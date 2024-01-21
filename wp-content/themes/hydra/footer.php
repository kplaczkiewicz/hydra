<?php

/**
 * The footer template
 * 
 * @package Hydra
 */
?>

<!-- Footer -->
<footer class="container">
    <div class="grid grid-cols-4">
        <!-- Logo -->
        <?php if (get_field('site_logo_simple', 'options')) : $image = get_field('site_logo_simple', 'options'); ?>
            <a href="/">
                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
            </a>
        <?php endif; ?>

        <!-- Menu 1 -->
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-footer-1',
            'menu_class' => 'menu-footer',
            'container' => 'nav'
        ]);
        ?>

        <!-- Menu 2 -->
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-footer-2',
            'menu_class' => 'menu-footer',
            'container' => 'nav'
        ]);
        ?>

        <!-- Socials -->
        <div>
            <?php if (get_field('footer_social_media_text', 'options')) : ?>
                <p><?= get_field('footer_social_media_text', 'options'); ?></p>
            <?php endif; ?>

            <!-- Social media icons -->
            <?php if (have_rows('footer_social_media', 'options')) : ?>
                <div class="flex">
                    <?php while (have_rows('footer_social_media', 'options')) : the_row(); ?>
                        <a href="<?= get_sub_field('footer_social_media_url', 'options'); ?>">
                            <?php if (get_sub_field('footer_social_media_icon', 'options')) : $image = get_sub_field('footer_social_media_icon', 'options'); ?>
                                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
                            <?php endif; ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


            <?php if (get_field('footer_social_media_button', 'options')) : $link = get_field('footer_social_media_button', 'options'); ?>
                <a class="btn btn-primary" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center">
        <?php if (get_field('footer_copyright_text', 'options')) : ?>
            <p><?= get_field('footer_copyright_text', 'options'); ?></p>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>