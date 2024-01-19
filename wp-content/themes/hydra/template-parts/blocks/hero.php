<?php if ($is_preview) : ?>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/previews/hero-block-preview.jpg" alt="Hero Block Preview">
<?php else: ?>

<section class="hero-block" id="<?php the_field('block_id') ?>">
    <?php if ( get_field('hero_heading') ) : ?>
        <h1><?php echo get_field('hero_heading'); ?></h1>
    <?php endif; ?>
    
</section>

<?php endif; ?>