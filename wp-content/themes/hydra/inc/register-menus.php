<?php
function hydra_register_menus() {
    register_nav_menus(
        array(
            'menu-primary' => __( 'Menu Primary' ),
            'menu-footer-1' => __( 'Menu Footer 1' ),
            'menu-footer-2' => __( 'Menu Footer 2' ),
        )
    );
}
add_action( 'init', 'hydra_register_menus' );