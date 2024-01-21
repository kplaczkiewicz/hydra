<?php

/**
 * Hydra functions and definitions.
 *
 * @package Hydra
 * Textdomain: Hydra
 */

// Exit if accessed directly
if (!defined('ABSPATH'))
	exit;

// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', false);
include "inc/inc.vite.php";

// Register menus
require get_template_directory() . '/inc/register-menus.php';

// Enquqe styles and scripts
require get_template_directory() . '/inc/styles-and-scripts.php';

// ACF Additional Functions
require get_template_directory() . '/inc/acf-additional.php';

// Wordpress Additional Functions
require get_template_directory() . '/inc/wordpress-additional.php';

// Shortcodes
require get_template_directory() . '/inc/shortcodes.php';

// Register ACF Gutenberg Blocks
require get_template_directory() . '/inc/acf-register-blocks.php';

// Register Image Sizes
require get_template_directory() . '/inc/image-sizes.php';