<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Amelie
 */

get_header(); ?>

<?php
if ( have_posts() ) {

	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', 'archive' );
	}
	?>

	<div class="cs-posts-area__pagination">
	<?php
		the_posts_pagination(
			array(
				'prev_text' => esc_html__( 'Previous', 'amelie' ),
				'next_text' => esc_html__( 'Next', 'amelie' ),
			)
		);
	?>
	</div>

	<?php
} else {
	?>
	<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'amelie' ); ?></p>
	<?php get_search_form(); ?>
	<?php
}
?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
