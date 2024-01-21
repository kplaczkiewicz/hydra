<?php

/**
 * The header template
 * 
 * @package Hydra
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header lg:mt-4 xl:mt-10 sticky top-0 bg-transparent z-50">
        <div class="container flex items-center py-2.5 max-xl:justify-between">
            <!-- Logo -->
            <?php if (get_field('site_logo', 'options')) : $image = get_field('site_logo', 'options'); ?>
                <a class="xl:mr-[12.5rem] -mb-2 sm:-mb-3 lg:-mb-4" href="/" title="Hydra logo">
                    <img class="max-sm:w-[131px] max-lg:w-[151px]" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
                </a>
            <?php endif; ?>

            <!-- Menu -->
            <div class="place-self-center max-lg:hidden">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-primary',
                    'menu_class' => 'menu-primary menu',
                    'container' => 'nav'
                ]);
                ?>
            </div>

            
            <!-- Buttons -->
            <div class="flex justify-end items-center gap-6 xl:gap-[2.438rem] xl:ml-auto">
                <!-- Hamburger -->
                <button class="hamburger lg:hidden sm:mr-4">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <?php if (get_field('header_cta_1', 'options')) : $link = get_field('header_cta_1', 'options'); ?>
                    <a class="btn btn-secondary max-sm:hidden" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
                <?php endif; ?>

                <?php if (get_field('header_cta_2', 'options')) : $link = get_field('header_cta_2', 'options'); ?>
                    <a class="btn btn-primary max-sm:hidden" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu bg-primary transition-all duration-300 z-50 grid grid-rows-[0fr] lg:hidden">
            <div class="w-full overflow-hidden shadow-xl px-6">
                <div class="mx-auto max-w-[420px] w-full pb-5">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-primary',
                        'menu_class' => 'menu-mobile menu',
                        'container' => 'nav'
                    ]);
                    ?>

                    <div class="flex gap-3 mt-5 justify-center sm:hidden">
                        <?php if (get_field('header_cta_1', 'options')) : $link = get_field('header_cta_1', 'options'); ?>
                            <a class="btn btn-secondary flex-1" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
                        <?php endif; ?>

                        <?php if (get_field('header_cta_2', 'options')) : $link = get_field('header_cta_2', 'options'); ?>
                            <a class="btn btn-primary flex-1" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>