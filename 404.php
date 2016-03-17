<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

<section class="full-screen">

	</div>

	<?php if( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Nothing here because 404 duhhh  -->

		<?php endwhile; // end of the loop. ?>

	<?php else: ?>

		<div class="four-oh-four large-open-section-container">
			<div class="large-open-section">
				<h1>404</h1>
				<p><?php _e( 'Sorry, but we can not find that page. Maybe you should try searching for a new keyword.', 'Breadwinner Cycles' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>

	<?php endif; ?>

</section>
<?php get_footer(); ?>
