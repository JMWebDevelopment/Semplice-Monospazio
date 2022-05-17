<?php
/**
 * This file adds functions to the JM Web Development FSE Starter Theme for WordPress.
 *
 * @package JM Web Development FSE Starter Theme
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

if ( ! function_exists( 'jm_web_dev_fse_starter_theme_setup' ) ) {
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
	function jm_web_dev_fse_starter_theme_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'jm-web-dev-fse-starter-theme', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/css/editor-styles.min.css'
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'jm_web_dev_fse_starter_theme_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'jm_web_dev_fse_starter_theme_enqueue_style_sheet' );
function jm_web_dev_fse_starter_theme_enqueue_style_sheet() {

	wp_enqueue_style( 'jm-web-dev-fse-starter-theme', get_template_directory_uri() . '/assets/css/global.min.css', array(), wp_get_theme()->get( 'Version' ) );

}

function jm_web_dev_fse_starter_theme_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'jm-web-dev-fse-starter-theme' ), esc_html( $search_term ) ) : __( 'Search results', 'jm-web-dev-fse-starter-theme' );
	}
}

// Include block styles.
register_block_style(
	'core/group',
	array(
		'name'  => 'full-height',
		'label' => __( 'Full-height', 'jm-web-dev-fse-starter-theme' ),
	)
);


// Include block patterns.
/**
 * Registers block patterns, categories, and type.
 *
 * @since 1.0.0
 */
function jm_web_dev_fse_starter_theme_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type(
			'jm-web-dev-fse-starter-theme',
			array(
				'label' => __( 'JM Web Dev FSE Starter Theme', 'jm-web-dev-fse-starter-theme' ),
			)
		);
	}

	$block_pattern_categories = array(
		'jm-web-dev-fse-starter-theme-404'  => array(
			'label'         => __( '404', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-footer'  => array(
			'label'         => __( 'Footer', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-header'  => array(
			'label'         => __( 'Header', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-search'  => array(
			'label'         => __( 'Search', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since 0.8.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'jm_web_dev_fse_starter_theme_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'jm_web_dev_fse_starter_theme_register_block_patterns', 9 );
