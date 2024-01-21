<?php if ($is_preview) : ?>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/previews/flip-grid-block-preview.jpg" alt="Flip Grid Preview">
<?php else : ?>

    <?php
    $block_id = the_field('block_id') ?? 'block-' . rand(1, 10000);
    $block_styles = hydra_acf_block_styles($block_id);

    echo $block_styles;
    ?>

    <section class="container flex flex-col md:flex-row max-xl:items-center gap-8 md:gap-10 lg:gap-16 xl:gap-[7.375rem]" id="<?= $block_id  ?>" style="padding-top: var(--padding-top); padding-bottom: var(--padding-bottom);">
        <div class="max-xl:flex-1 xl:max-w-[524px]">
            <?php if (get_field('flip_grid_image')) : $image = get_field('flip_grid_image'); ?>
                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
            <?php endif; ?>
        </div>

        <div class="flex-1 xl:pt-12">
            <h2 class="text-3xl sm:text-4xl leading-none mb-6 md:mb-[2.625rem] uppercase">
                <span class="block font-bold">
                    <?php if (get_field('flip_grid_heading')) : ?>
                        <?= get_field('flip_grid_heading'); ?>
                    <?php endif; ?>
                </span>

                <span class="block font-light mt-2">
                    <?php if (get_field('flip_grid_subheading')) : ?>
                        <?= get_field('flip_grid_subheading'); ?>
                    <?php endif; ?>
                </span>
            </h2>

            <?php if (get_field('flip_grid_text')) : ?>
                <p class="mb-6 leading-[1.62]"><?= get_field('flip_grid_text'); ?></p>
            <?php endif; ?>

            <?php if (get_field('flip_grid_button')) : $link = get_field('flip_grid_button'); ?>
                <a class="btn btn-primary btn-wide" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>