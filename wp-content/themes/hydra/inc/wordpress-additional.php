<?php
// Add title tag support
add_theme_support('title-tag');

// Add thumbnail support
add_theme_support('post-thumbnails');

// Add svg support
function hydra_enable_svg_upload($upload_mimes) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'hydra_enable_svg_upload', 10, 1);

// Enable wordpress to set dimensions of svg images
function hydra_get_attachment_image_svg($image, $attachment_id, $size, $icon) {
    if (is_array($image) && preg_match('/\.svg$/i', $image[0]) && $image[1] <= 1) {
        if (is_array($size)) {
            $image[1] = $size[0];
            $image[2] = $size[1];
        } elseif (($xml = simplexml_load_file($image[0])) !== false) {
            $attr = $xml->attributes();
            $viewbox = explode(' ', $attr->viewBox);
            $image[1] = isset($attr->width) && preg_match('/\d+/', $attr->width, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[2] : null);
            $image[2] = isset($attr->height) && preg_match('/\d+/', $attr->height, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[3] : null);
        } else {
            $image[1] = $image[2] = null;
        }
    }
    return $image;
}
add_filter('wp_get_attachment_image_src', 'hydra_get_attachment_image_svg', 10, 4);
