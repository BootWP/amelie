<?php
/**
 * Schematic functions and definitions
 *
 * @package Amelie
 */

if ( ! function_exists( 'aml_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aml_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Schematic, use a find and replace
		 * to change 'schematic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'amelie', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'amelie' ),
				'footer'  => esc_html__( 'Footer', 'amelie' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, comments, etc.
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Supported Formats.
		add_theme_support(
			'post-formats',
			array(
				'gallery',
				'image',
				'video',
				'audio',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Register custom thumbnail sizes.
		add_image_size( 'aml-smaller', 80, 80, true );
		add_image_size( 'aml-small', 110, 110, true );
		add_image_size( 'aml-thumbnail', 380, 250, true );
		add_image_size( 'aml-thumbnail-uncropped', 380, 0, false );
		add_image_size( 'aml-medium', 800, 500, true );
		add_image_size( 'aml-medium-uncropped', 800, 0, true );
		add_image_size( 'aml-large', 1160, 680, true );
		add_image_size( 'aml-large-uncropped', 1160, 0, true );
		add_image_size( 'aml-extra-large', 1920, 1024, true );
	}
}
add_action( 'after_setup_theme', 'aml_setup' );

/**
* Assets.
*/
require get_template_directory() . '/inc/assets.php';

/**
* Widgets Init.
*/
//require get_template_directory() . '/inc/widgets-init.php';

/**
*
* Template Functions.
*/
require get_template_directory() . '/inc/template-functions.php';

/**
* Filters.
*/
//require get_template_directory() . '/inc/filters.php';

/**
* Gutenberg.
*/
//require get_template_directory() . '/inc/gutenberg.php';

/**
* Woocommerce.
*/
//require get_template_directory() . '/inc/woocommerce.php';

/**
* Customizer Functions.
*/
//require get_template_directory() . '/inc/customizer.php';

/**
* Actions.
*/
//require get_template_directory() . '/inc/actions.php';

/**
* Partials.
*/
//require get_template_directory() . '/inc/partials.php';

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';

/**
* Custom post meta function.
*/
//require get_template_directory() . '/inc/post-meta.php';

/**
* Plugins.
*/
//require get_template_directory() . '/inc/plugins.php';
