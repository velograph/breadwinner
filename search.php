<?php
/**
 * The template for displaying search results pages.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

<div class="section-header">

	<h4>Search Results</h4>

</div>

<section class="breadwinner-search-results">

	<?php

		$keyword = get_search_query();
		$args = array(
			'post_type' => array(
				'product'
			),
			's' => $keyword,
			'posts_per_page' => -1,
			'tax_query' => array(
				'relation' => 'OR',
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => array(
						'model-components',
						'models',
					),
					'operator' => 'NOT IN'
				),
			),
		);
		$query = new WP_Query($args); ?>

		<?php if($query->have_posts()) : ?>

			<?php while($query->have_posts()) : ?>

				<?php $query->the_post(); ?>

				<div class="portal" id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink(); ?>">
						<?php $mobile_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
						<?php $tablet_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
						<?php $desktop_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
						<?php $retina_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

						<picture>
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $mobile_page_banner[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet_page_banner[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop_page_banner[0]; ?>"
								media="(max-width: 1180px)" />
							<source
								srcset="<?php echo $retina_page_banner[0]; ?>"
								media="(min-width: 1181px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $desktop_page_banner[0]; ?>">
						</picture>
						<h6 class="title">
							<?php the_title(); ?>
						</h6>
					</a>
				</div>

			<?php endwhile; ?>

			<?php else : ?>

				<p>There doesn't seem to be anything here for that search query.</p>
				<a href="/product-category/bikes/" class="button">View the Breadwinner Lineup</a>
				<?php //get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section>

<?php get_footer(); ?>
