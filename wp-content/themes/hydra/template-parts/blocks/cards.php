<?php if ($is_preview) : ?>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/previews/cards-block-preview.jpg" alt="Cards Preview">
<?php else : ?>

    <?php
    $block_id = the_field('block_id') ?? 'block-' . rand(1, 10000);
    $block_styles = hydra_acf_block_styles($block_id);

    echo $block_styles;
    ?>

    <section class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[0.688rem]" id="<?= $block_id  ?>" style="padding-top: var(--padding-top); padding-bottom: var(--padding-bottom);">
        <?php if (have_rows('cards')) : ?>
            <?php while (have_rows('cards')) : the_row(); ?>
                <div class="bg-gradient-radial rounded-[2.5rem] text-center pt-[1.438rem] px-[1.563rem] pb-[2.5rem]">
                    <?php if (get_sub_field('card_image')) : $image = get_sub_field('card_image'); ?>
                        <img class="mx-auto mb-6" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" />
                    <?php endif; ?>

                    <?php if (get_sub_field('card_heading')) : ?>
                        <h3 class="inline-block text-2xl leading-none mb-[1.125rem]  font-bold uppercase"><?= get_sub_field('card_heading'); ?></h3>
                    <?php endif; ?>

                    <!-- Divider -->
                    <div class="w-[154px] h-px mx-auto mb-5 bg-[#C0B7E854]"></div>

                    <?php if (get_sub_field('card_heading')) : ?>
                        <p class="text-left text-xs leading-[1.7] mb-8"><?= get_sub_field('card_text'); ?></p>
                    <?php endif; ?>

                    <?php if (get_sub_field('card_button')) : $link = get_sub_field('card_button'); ?>
                        <a class="btn btn-primary" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

<?php endif; ?>