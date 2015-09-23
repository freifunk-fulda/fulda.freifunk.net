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
function fff_icon_widget( $atts ) {
    $atts = shortcode_atts( array(
        'icon'  => 'fa-wordpress',
        'title' => 'Text ^_^',
        'text'  => 'Jean shorts cray whatever viral trust fund lo-fi.',
        'href'  => '#',
    ), $atts );

    $o = '<div class="ico-box">';
    $o .= '<span class="fa ' . esc_attr( $atts['icon'] ) . '"></span>';
    $o .= '<p class="box-title">' . esc_attr( $atts['title'] ) . '</p>';
    $o .= '<p>' . esc_attr( $atts['text'] ) . '</p>';
    $o .= '</div><!-- .ico-box -->';

    return $o;
}

add_shortcode( 'fff_icon_widget', 'fff_icon_widget' );

