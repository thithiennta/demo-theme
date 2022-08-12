<?php
/**
 * CDE Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ABC_WP
 * @subpackage CDE_Theme
 * @since CDE Theme 1.0
 */
function cde_theme_register_styles() {
	wp_enqueue_style( 'cde-theme-style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all' );
	wp_enqueue_script( 'cde-theme-style', get_template_directory_uri() . '/script.js', array( 'jquery' ), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'cde_theme_register_styles' );
add_filter( 'use_block_editor_for_post', '__return_false', 10 );

require_once get_template_directory() . '/includes/custom-assets.php';
require_once get_template_directory() . '/includes/custom-post-type.php';
require_once get_template_directory() . '/includes/custom-meta-box.php';

// Pagination.
function genre_taxonomy_pagination( $query ) {
	if ( is_tax( 'genre' ) ) {

		$post_per_page = 5;

		if ( $query->is_main_query() ) {

			$query->set( 'posts_per_page', $post_per_page );
		}
	}
}
add_action( 'pre_get_posts', 'genre_taxonomy_pagination' );
