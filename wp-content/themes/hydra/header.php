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

    <header class="container flex justify-between items-center">
        <!-- Logo -->
        <?php if (get_field('site_logo', 'options')) : $image = get_field('site_logo', 'options'); ?>
            <a href="/">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
        <?php endif; ?>

        <!-- Menu -->
        <?php
            wp_nav_menu([
                'theme_location' => 'menu-primary',
                'menu_class' => 'menu-primary',
                'container' => 'nav'
            ]);
        ?>

        <!-- Buttons -->
        <div class="flex gap-4">
            <?php if (get_field('header_cta_1', 'options')) : $link = get_field('header_cta_1', 'options'); ?>
                <a class="btn btn-secondary" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>

            <?php if (get_field('header_cta_2', 'options')) : $link = get_field('header_cta_2', 'options'); ?>
                <a class="btn btn-primary" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </header>