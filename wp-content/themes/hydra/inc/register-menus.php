<?php
function hydra_register_menus() {
    register_nav_menus(
        array(
            'menu-primary' => __( 'Menu Primary' ),
        )
    );
}
add_action( 'init', 'hydra_register_menus' );