<?php

/**
 * The footer template
 * 
 * @package Hydra
 */
?>

<!-- Footer -->
<footer class="container">
    <div class="flex flex-col sm:flex-row max-sm:items-center max-sm:text-center max-xl:justify-between mb-10 md:mb-[4.375rem]">
        <!-- Logo -->
        <?php if (get_field('site_logo_simple', 'options')) : $image = get_field('site_logo_simple', 'options'); ?>
            <a href="/">
                <img class="max-sm:w-[121px] max-lg:w-[141px]" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
            </a>
        <?php endif; ?>

        <!-- Separator -->
        <div class="w-[6px] gradient-vertical xl:ml-[6.25rem] xl:mr-20 max-sm:hidden"></div>

        <!-- Menu 1 -->
        <div class="max-sm:my-8">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-footer-1',
                'menu_class' => 'menu-footer menu',
                'container' => 'nav'
            ]);
            ?>
            <div class="lg:hidden mt-6">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-footer-2',
                    'menu_class' => 'menu-footer menu',
                    'container' => 'nav'
                ]);
                ?>
            </div>
        </div>

        <!-- Separator -->
        <div class="w-[6px] gradient-vertical xl:ml-[9.688rem] xl:mr-[6.688rem] max-sm:hidden"></div>
        <div class="w-full h-px gradient-horizontal mb-8 sm:hidden"></div>

        <!-- Menu 2 -->
        <div class="max-lg:hidden">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-footer-2',
                'menu_class' => 'menu-footer menu',
                'container' => 'nav'
            ]);
            ?>
        </div>

        <!-- Separator -->
        <div class="w-[6px] gradient-vertical xl:mx-[4.375rem] max-lg:hidden"></div>

        <!-- Socials -->
        <div class="max-sm:w-full">
            <?php if (get_field('footer_social_media_text', 'options')) : ?>
                <p class="text-sm sm:text-base leading-none font-bold uppercase"><?= get_field('footer_social_media_text', 'options'); ?></p>
            <?php endif; ?>

            <!-- Social media icons -->
            <?php if (have_rows('footer_social_media', 'options')) : ?>
                <div class="flex justify-center sm:justify-start gap-5 mt-6 md:mt-[2.375rem]">
                    <?php while (have_rows('footer_social_media', 'options')) : the_row(); ?>
                        <a class="transition-[filter] hover:brightness-125" href="<?= get_sub_field('footer_social_media_url', 'options'); ?>">
                            <?php if (get_sub_field('footer_social_media_icon', 'options')) : $image = get_sub_field('footer_social_media_icon', 'options'); ?>
                                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
                            <?php endif; ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


            <?php if (get_field('footer_social_media_button', 'options')) : $link = get_field('footer_social_media_button', 'options'); ?>
                <a class="btn btn-primary mt-7 sm:mt-9 md:mt-12" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>

    <div class="w-full h-px gradient-horizontal"></div>

    <!-- Copyright -->
    <div class="text-center my-8 md:my-12">
        <?php if (get_field('footer_copyright_text', 'options')) : ?>
            <p class="text-xs sm:text-sm font-bold tracking-[2px]"><?= get_field('footer_copyright_text', 'options'); ?></p>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>