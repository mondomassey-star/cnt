<?php
/**
 * Plugin Name: Bootstrap for Slider Revolution
 * Description: Enqueue Bootstrap 5.3.7 (CSS & bundle JS) so carousels inside Slider Revolution HTML layers work.
 * Version: 1.1
 */

add_action('wp_enqueue_scripts', function () {
    if (is_admin()) return;

    // Bootstrap 5.3.7 CSS
    if (!wp_style_is('bootstrap-css', 'enqueued')) {
        wp_enqueue_style(
            'bootstrap-css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css',
            [],
            '5.3.7'
        );
    }

    // Bootstrap 5.3.7 JS bundle (includes Popper)
    if (!wp_script_is('bootstrap-js', 'enqueued')) {
        wp_enqueue_script(
            'bootstrap-js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js',
            [],
            '5.3.7',
            true // load in footer
        );
    }
}, 20);
