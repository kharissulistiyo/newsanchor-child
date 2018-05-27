<?php

/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'newsanchor_child_enqueue' );
function newsanchor_child_enqueue() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_script( 'newsanchor-child-main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true );

}

/**
 * Dequeue parent script
 */
add_action( 'wp_print_scripts', 'newsanchor_child_dequeue_scripts', 999 );
function newsanchor_child_dequeue_scripts() {
  wp_dequeue_script('newsanchor-main');
}
