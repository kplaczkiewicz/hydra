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

// Calculate block styles
function hydra_acf_block_styles($block_id) {
	$padding_top = round(get_field_value('padding_top') / 16, 2) . 'rem';
	$padding_bottom = round(get_field_value('padding_bottom') / 16, 2) . 'rem';

    $padding_top_tablet = round((get_field_value('padding_top') + get_field_value('padding_top_mobile')) / 32, 2) . 'rem';
	$padding_bottom_tablet = round((get_field_value('padding_bottom') + get_field_value('padding_bottom_mobile')) / 32, 2) . 'rem';

	$padding_top_mobile = round(get_field_value('padding_top_mobile') / 16, 2) . 'rem';
	$padding_bottom_mobile = round(get_field_value('padding_bottom_mobile') / 16, 2) . 'rem';

	$style = "
		<style>
			#{$block_id} { 
				--padding-top: {$padding_top};
				--padding-bottom: {$padding_bottom};
			} 

            @media (max-width: 1024px) {
				#{$block_id} {
					--padding-top: {$padding_top_tablet};
					--padding-bottom: {$padding_bottom_tablet};
				}
			}

			@media (max-width: 767px) {
				#{$block_id} {
					--padding-top: {$padding_top_mobile};
					--padding-bottom: {$padding_bottom_mobile};
				}
			}
		</style>
	";

    return $style;
}

// Helper function when there is no value
function get_field_value($field_name) {
	return get_field($field_name) == '' ? 0 : get_field($field_name);
}