<?php

// Additional image sizes
function img_sizes_setup() {
	// add_image_size('flip-grid-image', 560, 300, true);
}
add_action('after_setup_theme', 'img_sizes_setup');
