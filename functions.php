<?php
/**
 * wpTextBook
 *
 * @link https://github.com/bonbons0220/wptextbook/
 *
 * @package WordPress
 * @subpackage wpTextBook
 * @since 1.0
 */
 
/**
 * Enqueue child theme style(s)
**/
function tb_enqueue_styles() {
	$parent_style = 'twentyfifteen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'tb_enqueue_styles' );

// Custom Function to Include
function my_favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'my_favicon_link' );

/**
 * Override functions in the parent theme.
 *
**/
//if ( ! function_exists( 'theme_special_nav' ) ) {
    //function theme_special_nav() {
        //  Do something.
    //}
//}

/**
 * Include a file.
 *
**/
//require_once( get_stylesheet_directory() . '/my_included_file.php' );
?>