<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="product-top">

		<?php
			/**
			 * woocommerce_before_single_product_summary hook
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			// do_action( 'woocommerce_before_single_product_summary' );
		?>

		<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'product-banner-mobile' ); ?>
		<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'product-banner-tablet' ); ?>
		<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'product-banner-desktop' ); ?>
		<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'product-banner-retina' ); ?>

		<div class="featured-image">

			<picture>
				<!--[if IE 9]><video style="display: none"><![endif]-->
				<source
					srcset="<?php echo $mobile[0]; ?>"
					media="(max-width: 500px)" />
				<source
					srcset="<?php echo $tablet[0]; ?>"
					media="(max-width: 860px)" />
				<source
					srcset="<?php echo $desktop[0]; ?>"
					media="(max-width: 1180px)" />
				<source
					srcset="<?php echo $retina[0]; ?>"
					media="(min-width: 1181px)" />
				<!--[if IE 9]></video><![endif]-->
				<img srcset="<?php echo $image[0]; ?>">
			</picture>

			<div class="small-image-caption">
				<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
			</div>

		</div>

		<div class="summary entry-summary">

			<?php
				/**
				 * woocommerce_single_product_summary hook
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 */
				remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
				remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
				remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
				do_action( 'woocommerce_single_product_summary' );
			?>

			<div class="current-price">
				<h4>Total:</h4>
				<!-- The h1 here is receiving the updated price from the Review step -->
				<h1></h1>
				<div class="disclaimer">
					<em><?php the_field('deposit_disclaimer', 5248); ?></em>
				</div>

			</div>

		</div>

	</div>

	<div class="section-header">

		<h4>Highlights</h4>

	</div>

	<!-- End Section header -->

	<div class="highlight-gallery">

		<?php if( get_field('highlight_gallery') ) : ?>

			<?php

			$images = get_field('highlight_gallery');

			if( $images ): ?>
				<?php foreach( $images as $image ): ?>

					<div class="highlight-image">
						<picture>
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $image['sizes']['portal-mobile']; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $image['sizes']['portal-tablet']; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $image['sizes']['portal-desktop']; ?>"
								media="(max-width: 1180px)" />
							<source
								srcset="<?php echo $image['sizes']['portal-retina']; ?>"
								media="(min-width: 1181px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $image[0]; ?>">
						</picture>

						<div class="highlight-caption">
							<?php echo $image['caption']; ?>
						</div>

					</div>

				<?php endforeach; ?>
			<?php endif; ?>

		<?php endif; ?>

	</div>

	<div class="section-header">

		<h4>Specs</h4>

	</div>

	<!-- End Section header -->

	<div class="specs">

		<?php if( have_rows('specs') ) : ?>

			<ul class="spec-container">

				<?php while ( have_rows('specs') ) : ?>

					<?php the_row(); ?>
						<li class="spec">
							<?php the_sub_field('spec'); ?>
						</li>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	</div>

	<!-- End bike specs -->

	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
