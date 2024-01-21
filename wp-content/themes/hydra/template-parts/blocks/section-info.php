<?php if ($is_preview) : ?>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/previews/section-info-block-preview.jpg" alt="Section Info Preview">
<?php else : ?>

    <?php
		$block_id = the_field('block_id') ?? 'block-' . rand(1, 10000);
		$block_styles = hydra_acf_block_styles($block_id);

		echo $block_styles;
	?>

    <section class="container flex flex-col md:flex-row max-xl:gap-5" id="<?= $block_id  ?>" style="padding-top: var(--padding-top); padding-bottom: var(--padding-bottom);">
        <div class="flex-1 mt-2">
            <h2 class="text-3xl sm:text-4xl leading-none uppercase">
                <span class="block font-bold">
                    <?php if ( get_field('section_heading') ) : ?>
                        <?= get_field('section_heading'); ?>
                    <?php endif; ?>
                </span>

                <div class="inline-flex flex-col xl:flex-row xl:items-center font-light mt-2.5">
                    <span class="shrink-0 xl:mr-5">
                        <?php if ( get_field('section_subheading') ) : ?>
                            <?= get_field('section_subheading'); ?>
                        <?php endif; ?>
                    </span>

                    <img class="max-w-[200px] max-xl:mt-4 max-md:hidden" src="<?= get_stylesheet_directory_uri() . '/assets/img/arrow-right-long.svg' ?>" alt="Arrow right">
                </div>
            </h2>
        </div>

        <div class="max-xl:flex-1 xl:max-w-[652px]">
            <?php if ( get_field('section_text') ) : ?>
                <p class="leading-[1.6]"><?= get_field('section_text'); ?></p>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>