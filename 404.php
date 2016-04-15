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
				<p><?php _e( 'That page doesn\'t exist!', 'Breadwinner Cycles' ); ?></p>
				<a href="/product-category/bikes/" class="button">View the Breadwinner Lineup</a>
			</div>
		</div>

	<?php endif; ?>

</section>
<?php get_footer(); ?>
