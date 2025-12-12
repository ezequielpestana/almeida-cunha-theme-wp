<?php

/**
 * Autoload
 */
if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
    require_once __DIR__ . '/vendor/autoload_packages.php';
}

/**
 * Vite compiler customizado para evitar timeout ao checar o dev server em produção.
 */

class AC_FastViteCompiler extends TailPress\Framework\Assets\ViteCompiler
{
   public function isDevServerRunning(): bool
    {
        // Se não for ambiente de desenvolvimento, não tenta pingar o dev server (evita atraso no primeiro load)
        $env = function_exists('wp_get_environment_type') ? wp_get_environment_type() : 'production';
        if ($env !== 'development') {
            return false;
        }

        // Flag manual para desabilitar dev server
        if (defined('TAILPRESS_VITE_DEV') && TAILPRESS_VITE_DEV === false) {
            return false;
        }

        // Se o domínio não for localhost/127, evita pingar dev server
        $host = wp_parse_url(home_url(), PHP_URL_HOST);
        if ($host && ! in_array($host, ['localhost', '127.0.0.1'], true)) {
            return false;
        }

        $args = ['timeout' => 0.3]; // timeout curto para não travar o primeiro request

        if ($this->ssl) {
            $args['sslverify'] = $this->sslVerify;
        }

        $response = wp_remote_get($this->serverUrl.'/@vite/client', $args);

        return ! is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200;
    }
} 

/**
 * Inicialização do TailPress + Vite Compiler
 */
function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => 
            $manager->withCompiler(
                new AC_FastViteCompiler,
               //new TailPress\Framework\Assets\ViteCompiler,
                fn($compiler) => $compiler
                    ->registerAsset('resources/css/app.css')
                    ->registerAsset('resources/js/app.js')
                    ->editorStyleFile('resources/css/editor-style.css')
            )->enqueueAssets()
        )
        ->features(fn($manager) => 
            $manager->add(TailPress\Framework\Features\MenuOptions::class)
        )
        ->menus(fn($manager) => 
            $manager
                ->add('primary', __('Primary Menu', 'tailpress'))
                ->add('switch-language', __('Switch Language', 'tailpress'))
        )
        ->themeSupport(fn($manager) => 
            $manager->add([
                'title-tag',
                'custom-logo',
                'post-thumbnails',
                'align-wide',
                'wp-block-styles',
                'responsive-embeds',
                'html5' => [
                    'search-form',
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                ],
            ])
        );
}

tailpress();

/**
 * Enfileira Font Awesome local
 */
function almeidacunha_enqueue_fontawesome(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'fontawesome',
        get_stylesheet_directory_uri() . '/resources/css/fontawesome/css/all.min.css',
        [],
        $theme_version
    );
}

add_action('wp_enqueue_scripts', 'almeidacunha_enqueue_fontawesome');


/**
 * EVITAR que o Polylang reescreva URLs de assets
 * Isso corrige lentidão, 404 silenciosos e erros após npm run build.
 */

// desativa reescrita de links por idioma
add_filter('pll_the_language_link', function ($url, $slug) {
    return $url;
}, 10, 2);

// garante que pastas de temas e uploads não sejam alteradas
add_filter('pll_home_url_white_list', function ($list) {
    // Polylang compara por prefixo da URL completa (com host). Use URLs absolutas para tema/dist/uploads.
    $list = array_values(array_filter($list, 'is_string')); // evita avisos de array para string

    $theme_url   = trailingslashit(get_theme_file_uri());
    $dist_url    = trailingslashit($theme_url . 'dist');

    $uploads     = wp_get_upload_dir();
    $uploads_url = ! empty($uploads['baseurl']) ? trailingslashit($uploads['baseurl']) : null;

    foreach ([$theme_url, $dist_url, $uploads_url] as $url) {
        if (is_string($url) && $url !== '') {
            $list[] = $url;
        }
    }

    return array_values(array_unique($list, SORT_STRING));
});

/**
 * Redireciona baseado no país detectado pelo IP (BR = pt, demais = en).
 * Cacheia o idioma por IP (transient) e cookie para reduzir chamadas à API.
 */

