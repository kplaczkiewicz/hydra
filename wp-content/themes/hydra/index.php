<?php
/**
 * The main template file
 * 
 * @package Hydra
 */
?>

<?php get_header() ?>

<main id="primary">
    <div class="relative z-10">
        <?php the_content() ?>
    </div>

    <!-- Background shapes -->
    <img class="bg-shape-right absolute top-0 right-0 z-0 max-lg:hidden" src="<?= get_stylesheet_directory_uri() . '/assets/img/bg-shapes.svg' ?>" alt="Background shape">

    <img class="bg-shape-left absolute top-[17.125rem] left-0 z-0 max-lg:hidden" src="<?= get_stylesheet_directory_uri() . '/assets/img/bg-shape-single.svg' ?>" alt="Background shape">
</main>


<?php get_footer() ?>