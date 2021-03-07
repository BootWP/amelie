<?php
/**
 * Template part for displaying posts
 *
 * @package Amelie
 */

?>

<article <?php post_class(); ?>>
	<?php the_title( '<h2 class="cs-entry__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
</article>
