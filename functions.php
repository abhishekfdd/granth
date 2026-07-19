<?php
/**
 * Granth functions and definitions.
 *
 * @package Granth
 */

if ( ! function_exists( 'granth_register_block_styles' ) ) {
	/**
	 * Register callout styles for the Group block.
	 */
	function granth_register_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'callout-note',
				'label' => __( 'Callout: Note', 'granth' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'callout-tip',
				'label' => __( 'Callout: Tip', 'granth' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'callout-warning',
				'label' => __( 'Callout: Warning', 'granth' ),
			)
		);
	}
}
add_action( 'init', 'granth_register_block_styles' );

if ( ! function_exists( 'granth_enqueue_block_styles' ) ) {
	/**
	 * Load the callout stylesheet only when the Group block is rendered.
	 */
	function granth_enqueue_block_styles() {
		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => 'granth-callouts',
				'src'    => get_theme_file_uri( 'assets/css/callouts.css' ),
				'path'   => get_theme_file_path( 'assets/css/callouts.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
			)
		);
	}
}
add_action( 'init', 'granth_enqueue_block_styles' );

if ( ! function_exists( 'granth_register_pattern_categories' ) ) {
	/**
	 * Register the pattern category used by the bundled patterns.
	 */
	function granth_register_pattern_categories() {
		register_block_pattern_category(
			'granth',
			array(
				'label' => __( 'Granth', 'granth' ),
			)
		);
	}
}
add_action( 'init', 'granth_register_pattern_categories' );
