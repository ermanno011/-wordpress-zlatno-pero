<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}
add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

function enqueue_styles() {
// child style ( this loads the css from the child folder after parent-style )
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
    wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() .'/global.css', array(), null, 'all' );
    wp_enqueue_style( 'media-style', get_stylesheet_directory_uri() .'/media.css', array(), null, 'all' );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// single product reordering elements
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_before_add_to_cart_form', 'woocommerce_template_single_meta', 10 );
