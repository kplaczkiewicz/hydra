<?php
// Current year shortcode
function hydra_current_year() {
	return date('Y');
}
add_shortcode('current_year', 'hydra_current_year');
