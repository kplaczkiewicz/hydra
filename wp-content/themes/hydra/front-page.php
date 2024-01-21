<?php
/**
 * Front page template file
 * 
 * @package Hydra
 */
?>

<?php get_header() ?>

<main id="primary">
    <div class="relative">
        <div class="relative z-10">
            <?php the_content() ?>
        </div>

        <!-- Background shape bottom -->
        <img class="bg-shape-right bg-shape-left absolute bottom-[7.188rem] right-0 z-0 max-lg:hidden" src="<?= get_stylesheet_directory_uri() . '/assets/img/bg-shapes-bottom.svg' ?>">
    </div>

    <!-- Background shapes -->
    <img class="bg-shape-right absolute top-0 right-0 z-0 max-lg:hidden" src="<?= get_stylesheet_directory_uri() . '/assets/img/bg-shapes.svg' ?>">
    <img class="bg-shape-left absolute top-[17.125rem] left-0 z-0 max-lg:hidden" src="<?= get_stylesheet_directory_uri() . '/assets/img/bg-shape-single.svg' ?>">
</main>


<?php get_footer() ?>