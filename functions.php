<?php
/**
 * This file adds functions to the Semplice Monospazio Theme for WordPress.
 *
 * @package Semplice Monospazio
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

if ( ! function_exists( 'semplice_monospazio_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function semplice_monospazio_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'semplice-monospazio', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/css/editor-styles.min.css',
				semplice_monospazio_fonts_url(),
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'semplice_monospazio_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'semplice_monospazio_enqueue_style_sheet' );
function semplice_monospazio_enqueue_style_sheet() {

	wp_enqueue_style( 'semplice-monospazio', get_template_directory_uri() . '/assets/css/global.min.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'semplice_monospazio_enqueue_fonts' );
function semplice_monospazio_enqueue_fonts() {

	wp_enqueue_style( 'semplice-monospazio-theme-fonts', semplice_monospazio_fonts_url(), array(), null );

}

// Define fonts.
function semplice_monospazio_fonts_url() {

	// Allow child themes to disable to the default Semplice Monospazio fonts.
	$dequeue_fonts = apply_filters( 'semplice_monospazio_dequeue_fonts', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	$fonts = [
		'family=Ubuntu+Mono:wght@400;700;',
	];

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );
}

function semplice_monospazio_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'semplice-monospazio' ), esc_html( $search_term ) ) : __( 'Search results', 'semplice-monospazio' );
	}
}

// Include block styles.
require get_template_directory() . '/inc/block-styles.php';

// Include block patterns.
require get_template_directory() . '/inc/block-patterns.php';
