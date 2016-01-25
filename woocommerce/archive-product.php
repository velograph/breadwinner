<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="breadcrumbs">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
</div>

<?php

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); // get current term
$parent = get_term($term->parent, get_query_var('taxonomy') ); // get parent term
$children = get_term_children($term->term_id, get_query_var('taxonomy')); // get children
if(($parent->term_id!="" && sizeof($children)>0)) : ?>

	echo 'has parent and child';

<?php elseif(($parent->term_id!="") && (sizeof($children)==0)) : ?>

	<!-- echo 'has parent, no child'; -->
	<!-- Regular loop here -->

	<div class="section-header">

		<h4><?php echo $term->name; ?></h4>

	</div>

	<?php woocommerce_product_loop_start(); ?>

		<?php woocommerce_product_subcategories(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="portal" id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>">
					<?php $mobile_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-mobile'); ?>
					<?php $tablet_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-tablet'); ?>
					<?php $desktop_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-desktop'); ?>
					<?php $retina_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-retina'); ?>

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
					<h4>
						<?php the_title(); ?>
					</h4>
				</a>
			</div>

		<?php endwhile; // end of the loop. ?>

	<?php woocommerce_product_loop_end(); ?>

<?php elseif(($parent->term_id=="") && (sizeof($children)>0)) : ?>

	<!-- echo 'no parent, has child'; -->
	<!-- foreach loop here for categories -->
	<?php
	$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$terms = get_terms( 'product_cat', array(
		'hide_empty' => 1,
		'orderby' => 'name',
		'child_of' => $current_term->term_id,
	) );
	?>

	<div class="<?php echo $term->slug; ?>">

		<?php
		// now run a query for each animal family
		foreach( $terms as $term ) {

			// Define the query
			$args = array(
				'post_type' => 'product',
				'product_cat' => $term->slug
			);
			$query = new WP_Query( $args ); ?>

			<div class="section-header">

				<h4>
					<a href="/product-category/<?php echo $current_term->slug; ?>/<?php echo $term->slug; ?>">
						<?php echo $term->name; ?>
					</a>
				</h4>

			</div>

			<div class="portal-container page-content">

				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="portal" id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink(); ?>">
						<?php $mobile_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-mobile'); ?>
						<?php $tablet_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-tablet'); ?>
						<?php $desktop_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-desktop'); ?>
						<?php $retina_page_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'page-banner-retina'); ?>

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
						<div class="overlay">&nbsp;</div>
						<h6 class="title">
							<?php the_title(); ?>
						</h6>
					</a>
				</div>

				<?php endwhile; ?>

			</div>

			<?php wp_reset_postdata(); ?>

		<?php } ?>

	</div>

<?php endif; ?>


<?php get_footer( 'shop' ); ?>