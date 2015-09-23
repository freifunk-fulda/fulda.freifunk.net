<?php

/**
 * Register and enqueue a script that does not depend on a JavaScript library.
 */
function fff_enqueue_scripts() {
    wp_register_script(
        'canvas-anim',
        get_stylesheet_directory_uri() . '/js/canvas.js',
        false,
        '1.0',
        true
    );

    wp_enqueue_script( 'canvas-anim' );
}

add_action( 'wp_enqueue_scripts', 'fff_enqueue_scripts' );
