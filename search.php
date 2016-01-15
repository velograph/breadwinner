<?php
/**
 * The template for displaying search results pages.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'Breadwinner Cycles' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				get_template_part( 'content', 'search' );
			?>

		<?php endwhile; ?>

		<?php basis_paging_nav(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
