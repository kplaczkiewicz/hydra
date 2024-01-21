<?php
// Add Custom Blocks Panel in Gutenberg
function hydra_custom_block_categories($categories, $post) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'content',
				'title' => __('Content', 'content'),
			),
		),
		array(
			array(
				'slug' => 'media-blocks',
				'title' => __('Media Blocks', 'media-blocks'),
			),
		)
	);
}
add_filter('block_categories_all', 'hydra_custom_block_categories', 10, 2);

// Register Custom Blocks
function hydra_register_acf_block_types() {
	// Hero block
	acf_register_block_type(array(
		'name'              => 'hero',
		'title'             => __('Hero'),
		'description'       => __('Hero block'),
		'render_template'   => 'template-parts/blocks/hero.php',
		'category'          => 'content',
		'icon'              => 'align-full-width',
		'keywords'          => array('hero', 'section', 'start'),
		'supports'          => array('mode' => false, 'align' => false),
		'mode'              => 'edit',
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'is_preview' => true
				)
			)
		)
	));

    // Section info block
	acf_register_block_type(array(
		'name'              => 'section-info',
		'title'             => __('Section info'),
		'description'       => __('Section info block'),
		'render_template'   => 'template-parts/blocks/section-info.php',
		'category'          => 'content',
		'icon'              => 'editor-indent',
		'keywords'          => array('section', 'info'),
		'supports'          => array('mode' => false, 'align' => false),
		'mode'              => 'edit',
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'is_preview' => true
				)
			)
		)
	));

     // Flip grid block
	acf_register_block_type(array(
		'name'              => 'flip-grid',
		'title'             => __('Flip grid'),
		'description'       => __('Flip grid block'),
		'render_template'   => 'template-parts/blocks/flip-grid.php',
		'category'          => 'content',
		'icon'              => 'align-pull-left',
		'keywords'          => array('flip', 'grid', 'columns'),
		'supports'          => array('mode' => false, 'align' => false),
		'mode'              => 'edit',
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'is_preview' => true
				)
			)
		)
	));

     // Cards block
	acf_register_block_type(array(
		'name'              => 'cards',
		'title'             => __('Cards'),
		'description'       => __('Cards block'),
		'render_template'   => 'template-parts/blocks/cards.php',
		'category'          => 'content',
		'icon'              => 'screenoptions',
		'keywords'          => array('card', 'columns'),
		'supports'          => array('mode' => false, 'align' => false),
		'mode'              => 'edit',
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'is_preview' => true
				)
			)
		)
	));

     // steps block
	acf_register_block_type(array(
		'name'              => 'steps',
		'title'             => __('Steps'),
		'description'       => __('Steps block'),
		'render_template'   => 'template-parts/blocks/steps.php',
		'category'          => 'content',
		'icon'              => 'editor-ol',
		'keywords'          => array('steps', 'numbers', 'columns'),
		'supports'          => array('mode' => false, 'align' => false),
		'mode'              => 'edit',
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'is_preview' => true
				)
			)
		)
	));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'hydra_register_acf_block_types');
}
