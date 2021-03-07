<?php
/**
 * Assets
 *
 * @package Amelie
 */

if ( ! function_exists( 'aml_enqueue_scripts' ) ) {
	/**
	 * Enqueue scripts and styles.
	 */
	function aml_enqueue_scripts() {

		//$version = csco_get_theme_data( 'Version' );

		// Register theme scripts.
		wp_register_script( 'swiper', get_template_directory_uri() . '/frontend/app/js/swiper-bundle.js', array( 'jquery' ), '1.0.0', true );
		wp_register_script( 'aml-scripts', get_template_directory_uri() . '/frontend/app/js/scripts.js', array( 'jquery', 'swiper' ), '1.0.0', true );

		// Enqueue theme scripts.
		wp_enqueue_script( 'aml-scripts' );

		// Enqueue comment reply script.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Register theme styles.
		wp_register_style( 'swiper', get_template_directory_uri() . '/frontend/app/css/swiper-bundle.css', array(), '1.0.0' );
		wp_register_style( 'aml-styles', get_template_directory_uri() . '/frontend/app/css/main.css', array( 'swiper' ), '1.0.0' );

		// Enqueue theme styles.
		wp_enqueue_style( 'aml-styles' );

	}
}
add_action( 'wp_enqueue_scripts', 'aml_enqueue_scripts' );
