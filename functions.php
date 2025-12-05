<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager
            ->add('primary', __( 'Primary Menu', 'tailpress'))
            ->add('switch-language', __( 'Switch Language', 'tailpress'))
        )
        ->themeSupport(fn($manager) => $manager->add([
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
            ]
        ]));
}

tailpress();

/**
 * Enfileira Font Awesome local (arquivo gerado em dist/assets).
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
