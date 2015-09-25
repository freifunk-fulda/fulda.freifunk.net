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


add_action( 'after_setup_theme', function () {
    load_child_theme_textdomain( 'corpobox', get_stylesheet_directory() . '/languages' );
} );


function fff_hero( $atts ) {
	$atts = shortcode_atts( array(
		'title'       => 'no foo',
        'button_href' => '#',
        'button_text'  => 'Klickense hier!'
    ), $atts, 'fff_hero' );

    $o = '<section id="prebefore-home-widget">';
    $o .= '<div class="widget">';
    $o .= '<div class="call-to-action">';

    $o .= '<div class="call-to-action-text">';
    $o .= '<h3>' . $atts['title'] . '</h3>';
    $o .= '</div><!-- .call-to-action-text -->';

    $o .= '<div class="call-to-action-button">';
    $o .= '<a href="' . $atts['button_href'] . '" class="btn fff-button">' . $atts['button_text'] . '</a>';
    $o .= '</div><!-- .call-to-action-button -->';

    $o .= '<div class="clearfix"></div>';
    $o .= '</div><!-- .call-to-action -->';
    $o .= '</div><!-- .widget -->';
    $o .= '</section>';

	return $o;
}

add_shortcode( 'fff_hero', 'fff_hero' );
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

