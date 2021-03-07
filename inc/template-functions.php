<?php
/**
 * Template Functions
 *
 * @package Amelie
 */

if ( ! function_exists( 'aml_get_navbar_type' ) ) {
	/**
	 * Returns Navbar Type
	 */
	function aml_get_navbar_type() {
		return apply_filters( 'aml_navbar_type', get_theme_mod( 'navbar_type', 'one' ) );
	}
}

if ( ! function_exists( 'aml_get_footer_type' ) ) {
	/**
	 * Returns Footert Type
	 */
	function aml_get_footer_type() {
		return apply_filters( 'aml_footer_type', get_theme_mod( 'footer_type', 'one' ) );
	}
}
