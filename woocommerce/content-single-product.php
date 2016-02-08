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

<?php if( has_term('bikes','product_cat') ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="full-width-slider">

			<?php if( get_field('lifestyle_gallery') ) : ?>

				<?php

				$images = get_field('lifestyle_gallery');

				if( $images ): ?>
					<?php foreach( $images as $image ): ?>

						<div class="slide">
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
								<img data-lazy="<?php echo $image[0]; ?>">
							</picture>

						</div>

					<?php endforeach; ?>
				<?php endif; ?>

			<?php endif; ?>

		</div>

		<div class="page-title">
			<?php the_title(); ?>
		</div>

		<div class="scroll-for-content">

			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
				 y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
			<path d="M13.418,7.859c0.271-0.268,0.709-0.268,0.978,0c0.27,0.268,0.272,0.701,0,0.969l-3.908,3.83
				c-0.27,0.268-0.707,0.268-0.979,0l-3.908-3.83c-0.27-0.267-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.978,0L10,11L13.418,7.859z
				"/>
			</svg>

		</div>

	<?php endwhile; // end of the loop. ?>


		<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>

		<script>
		</script>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="large-open-section-container">
				<div class="large-open-section">
					<h3><?php the_content(); ?></h3>
				</div>
			</div>

			<div class="section-title">

				<h2><?php the_field('configurator_title'); ?></h2>

			</div>

			<div class="large-open-section-container">
				<div class="large-open-section">
					<?php the_field('guiding_text', 5248); ?>
				</div>
			</div>

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
							<img data-lazy="<?php echo $image[0]; ?>">
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
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
							do_action( 'woocommerce_single_product_summary' );
						?>

						<div class="current-configuration">

							<div class="current-price">
								<h4>Total:</h4>
								<!-- The h1 here is receiving the updated price from the Review step -->
								<h1></h1>
								<div class="disclaimer">
									<em><?php the_field('deposit_disclaimer', 5248); ?></em>
								</div>


							</div>

							<div class="user-choices">

								<div class="frame">
									<strong>Frame:</strong>
									<span></span>
								</div>

								<div class="paint">
									<strong>Paint:</strong>
									<span></span>
								</div>

								<div class="drivetrain">
									<strong>Drivetrain:</strong>
									<span></span>
								</div>

								<div class="cockpit">
									<strong>Cockpit:</strong>
									<span></span>
								</div>

								<div class="wheelset">
									<strong>Wheelset:</strong>
									<span></span>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="section-header">

					<h4>Features &amp; Options</h4>

				</div>

				<div class="highlight-gallery">

					<?php if( get_field('highlight_gallery') ) : ?>

						<?php

						$images = get_field('highlight_gallery');

						if( $images ): ?>
							<?php foreach( $images as $image ): ?>

								<div class="highlight-image">
									<a href="<?php echo $image[url]; ?>">
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
											<img data-lazy="<?php echo $image[0]; ?>">
										</picture>

										<div class="highlight-caption">
											<?php echo $image['caption']; ?>
										</div>
									</a>

								</div>

							<?php endforeach; ?>
						<?php endif; ?>

					<?php endif; ?>

				</div>

				<div class="image-with-content">

					<div class="content">
						<div class="section-header">

							<h4>Geometry</h4>

						</div>

						<?php the_field('bike_diagram_text', 5248); ?>
					</div>

					<div class="image">

						<?php $mobile = wp_get_attachment_image_src(get_field('bike_drawing'), 'portal-mobile'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('bike_drawing'), 'portal-tablet'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('bike_drawing'), 'portal-desktop'); ?>

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
								media="(min-width: 861px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $image[0]; ?>">
						</picture>

					</div>

				</div>

				<div class="section-header">

					<h4>Specs</h4>

				</div>

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

			<?php $post_slug = $post->post_name; ?>

		<?php endwhile; // end of the loop. ?>

		<div class="image-and-process">

			<?php
			    $args = array(
			        'post_type' => 'post',
					'posts_per_page' => 1,
					'orderby' => 'rand',
					'tag' => $post_slug,
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<div class="image">

						<a href="/tag/<?php echo $post_slug; ?>">
							<?php $mobile = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
							<?php $tablet = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
							<?php $desktop = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>

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
									media="(min-width: 861px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image[0]; ?>">
							</picture>
						</a>

						<div class="caption">
							<a href="<?php echo get_tag_link($tag_id); ?>">
								#<?php echo $post_slug; ?>
							</a>
						</div>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>

			<div class="small-process-list">

				<div class="process-list">

					<?php if( have_rows('process_sections', 18) ) : ?>

						<?php while ( have_rows('process_sections', 18) ) : ?>

							<div class="number-row">
								<?php the_row(); ?>

								<?php if( get_row_layout() == 'process_section' ) : ?>

									<div class="content">

										<div class="step">
											<img src="<?php the_sub_field('step_number'); ?>" alt="step number" />
										</div>
										<div class="summary">
											<?php the_sub_field('step_quick_summary'); ?>
										</div>

									</div>

								<?php endif; ?>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>

		</div>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php elseif( has_term('goods','product_cat') ) : ?>

	<div class="single-good">

		<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/**
				 * woocommerce_before_single_product_summary hook
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				// do_action( 'woocommerce_before_single_product_summary' );
			?>

			<div class="image">

				<?php if( get_field('product_gallery') ) : ?>

					<div class="product-gallery">

						<?php

						$images = get_field('product_gallery');

						if( $images ): ?>
							<?php foreach( $images as $image ): ?>

								<div class="slide">
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

								</div>

							<?php endforeach; ?>
						<?php endif; ?>

					</div>

					<div class="page-title">
						<?php the_title(); ?>
					</div>

				<?php endif; ?>

			</div>

			<div class="summary entry-summary">

				<?php global $product; ?>
				<?php if( $product->is_type( 'simple' ) ) : ?>
					<div class="simple-product">
			  	<?php elseif( $product->is_type( 'variable' ) ) : ?>
					<div class="variable-product">
				<?php endif; ?>
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
						remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
						do_action( 'woocommerce_single_product_summary' );
					?>
				</div>


				<div class="product-content">
					<?php the_content(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php
			/**
			 * woocommerce_after_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>

	</div>

<?php endif; ?>
