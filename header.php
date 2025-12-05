<?php
/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Montserrat';
        }
    </style>
    <?php wp_head(); ?>
</head>
<body class="text-primary">
<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">
    <?php do_action('tailpress_header'); ?>

    <header class="fixed w-full max-w-full text-secondary bg-secondary shadow-md z-50">
        <div class="sm:flex sm:justify-between sm:items-center container mx-auto py-6">

            <!-- logo -->
            <div class="flex justify-between items-center ">
                <div class="max-w-40 md2:max-w-45">
                    <?php if (has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <div class="flex items-center gap-2">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="!no-underline lowercase font-medium text-lg">
                                <?php bloginfo('name'); ?>
                            </a>
                            <?php if ($description = get_bloginfo('description')): ?>
                                <span class="text-sm font-light text-primary">|</span>
                                <span class="text-sm font-light text-primary"><?php echo esc_html($description); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (has_nav_menu('primary')): ?>
                    <div class="sm:hidden">
                        <button type="button" aria-label="Toggle navigation" id="primary-menu-toggle">
                            <i class="fas fa-bars text-primary text-3xl"></i>
                        </button>
                    </div>
                <?php endif; ?>
            </div>


            <!-- nav desktop -->
            <div id="primary-navigation" class="hidden flex-col bg-transparent gap-6 items-center border border-light sm:border-none rounded-xl p-4 sm:p-0 sm:block text-primary">
                <nav>
                    <?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
                        <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>" class="text-sm text-primary"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
                    <?php else: ?>
                        <?php
                        wp_nav_menu([
                            'container_id'    => 'primary-menu',
                            'container_class' => '',
                            'menu_class'      => 'sm:flex sm:-mx-4 [&_a]:!no-underline',
                            'theme_location'  => 'primary',
                            'li_class'        => 'sm:mx-4',
                            'fallback_cb'     => false,
                        ]);
                        ?>
                    <?php endif; ?>
                </nav>

                <div class="max-w-40 mx-auto mt-4"><?php get_search_form(); ?></div>
            </div>
        </div>
    </header>
        <?php do_action('tailpress_content_start'); ?>
        <main class="@container">
            <div id="spacing">
