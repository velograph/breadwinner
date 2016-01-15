<?php
/**
 * The template for displaying all single posts.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php basis_post_nav(); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
