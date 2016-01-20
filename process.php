<?php
/**
 * Template Name: Process
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
