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
function wptb_enqueue_styles() {
	
	$min = ( defined( 'WP_ENV' ) && ( 'development' == WP_ENV ) ) ? '' : '.min' ;
	
	$parent_style = 'twentyfifteen-style';

    wp_enqueue_style( $parent_style, 
		get_template_directory_uri() . '/style.css' );
    //wp_enqueue_style( 'bootstrap' , 
		//get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap' . $min . '.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'wptb_enqueue_styles' );

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
/* Put the log in link on the main menu for now.
function wptb_footer_hook( $name ) {
	if ( defined( 'WP_ENV' ) && ( 'development' == WP_ENV ) ) {
		if ( is_user_logged_in() ) {
			echo '<div class="alert" role="alert"><a class="btn btn-sm btn-danger alignright" href="/wp-login.php?action=logout">Log Out</a><div>';					
		} else {
			echo '<div class="alert" role="alert"><a class="btn btn-sm btn-success alignright" href="/wp-login.php">Log In</a><div>';					
		}
	}
}
add_action( 'wp_footer', 'wptb_footer_hook', 8888 );
*/
/**
 * Include a file.
 *
**/
//require_once( get_stylesheet_directory() . '/my_included_file.php' );
?>