<?php if ($is_preview) : ?>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/previews/steps-block-preview.jpg" alt="Steps Preview">
<?php else : ?>

    <?php
    $block_id = the_field('block_id') ?? 'block-' . rand(1, 10000);
    $block_styles = hydra_acf_block_styles($block_id);

    echo $block_styles;
    ?>

    <section class="container" id="<?= $block_id  ?>" style="padding-top: var(--padding-top); padding-bottom: var(--padding-bottom);">
        <?php if (have_rows('steps')) : ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-[336px_332px_326px_1fr] xl:pl-7 gap-y-12 gap-6 xl:gap-0">
                <?php while (have_rows('steps')) : the_row(); ?>
                    <div class="flex xl:block flex-col items-center">
                        <div class="shadow-outline grid place-items-center w-[125px] sm:w-[159px] aspect-square bg-gradient-to-tr from-accent to-secondary rounded-full mb-[2.813rem] ml-5 <?= get_row_index() == 1 ? 'xl:ml-[2.875rem]' : '' ?>">
                            <span class="text text-5xl sm:text-[4rem] leading-none text-primary-focus font-bold ">0<?= get_row_index() ?></span>
                        </div>
    
                        <div class="flex gap-[0.875rem] items-start max-xl:w-full max-xl:justify-center">
                            <?php if (get_sub_field('step_heading')) : ?>
                                <img class="max-w-[33px] mt-px" src="<?= get_stylesheet_directory_uri() . '/assets/img/arrow-small-right.svg' ?>" alt="Arrow right">
                                <p class="text-xl sm:text-2xl font-bold"><?= get_sub_field('step_heading'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>

<?php endif; ?>