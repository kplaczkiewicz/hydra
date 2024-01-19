<?php
add_action('acf/init', 'hydra_acf_op_init');

// Add Site Settings
function hydra_acf_op_init() {
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title'    => 'Site settings',
			'menu_title'    => 'Site settings',
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		));
	}
}

// Turn on shortcodes for ACF textarea and text fields
function hydra_acf_format_value($value, $post_id, $field) {
	$value = do_shortcode($value);
	return $value;
}

add_filter('acf/format_value/type=textarea', 'hydra_acf_format_value', 10, 3);
add_filter('acf/format_value/type=text', 'hydra_acf_format_value', 10, 3);
