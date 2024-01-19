<?php
// Add title tag support
add_theme_support( 'title-tag' );

// Add thumbnail support
add_theme_support( 'post-thumbnails' );

// Add svg support
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );
