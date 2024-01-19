<?php
function hydra_register_scripts() {
    // Wordpress Icons
    wp_enqueue_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'hydra_register_scripts' );