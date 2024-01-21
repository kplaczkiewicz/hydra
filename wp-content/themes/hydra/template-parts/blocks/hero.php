<?php if ($is_preview) : ?>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/previews/hero-block-preview.jpg" alt="Hero Block Preview">
<?php else : ?>

    <?php
		$block_id = the_field('block_id') ?? 'block-' . rand(1, 10000);
		$block_styles = hydra_acf_block_styles($block_id);

		echo $block_styles;
	?>

    <section class="container flex flex-col md:flex-row justify-between gap-10 md:gap-8" id="<?= $block_id  ?>" style="padding-top: var(--padding-top); padding-bottom: var(--padding-bottom);">
        <div class="md:max-w-[456px] lg:mt-12">
            <?php if (have_rows('hero_heading')) : ?>
                <h1 class="site-heading text-3xl md:text-[40px] leading-snug font-bold mb-4 md:mb-9">
                    <?php while (have_rows('hero_heading')) : the_row(); ?>
                        <span class="<?php the_sub_field('hero_heading_text_color'); ?>">
                            <?php the_sub_field('hero_heading_text'); ?>
                        </span>
                    <?php endwhile; ?>
                </h1>
            <?php endif; ?>

            <?php if (get_field('hero_text')) : ?>
                <p class="mb-8 md:mb-[4.125rem] leading-normal"><?= get_field('hero_text'); ?></p>
            <?php endif; ?>

            <?php if (get_field('hero_button')) : $link = get_field('hero_button'); ?>
                <a class="btn btn-primary" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>

        <?php if (get_field('hero_image')) : $image = get_field('hero_image'); ?>
            <img class="self-center md:max-w-[50%] " src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
        <?php endif; ?>
    </section>

<?php endif; ?>