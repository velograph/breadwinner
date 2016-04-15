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
									srcset="<?php echo $image['sizes']['full-width-slider-mobile']; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $image['sizes']['full-width-slider-tablet']; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $image['sizes']['full-width-slider-desktop']; ?>"
									media="(max-width: 1180px)" />
								<source
									srcset="<?php echo $image['sizes']['single-bike-slider-retina']; ?>"
									media="(min-width: 1181px)" />
								<!--[if IE 9]></video><![endif]-->
								<img data-lazy="<?php echo $image[0]; ?>">
							</picture>

						</div>

					<?php endforeach; ?>
				<?php endif; ?>

			<?php endif; ?>

		</div>

	<?php endwhile; ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<div class="description-call-to-action">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>

				<div class="description section">
					<h3><?php the_excerpt(); ?></h3>
					<div class="content">
						<?php the_content(); ?>
						<hr />
						<div class="pricing">
							<?php if( has_term('single-frame-option', 'product_cat') ) : ?>
								<span class="frame-price">Frame: <span class="price">$<?php the_field('frame_price'); ?></span></span>
							<?php else : ?>
								<span class="frame-price">Frame and Fork: <span class="price">$<?php the_field('frame_price'); ?></span></span>
							<?php endif; ?>
							<span class="complete-price">Completes Starting At: <span class="price">$<?php the_field('complete_price'); ?></span></span>
						</div>
					</div>
				</div>

			<?php endwhile; ?>

		<div class="call-to-action section">

			<h3>Ready to order?</h3>
			<p>Place a $500 deposit and we'll get right back to you to discuss details.</p>

			<script>
				jQuery(document).ready(function(){

					jQuery('.configurator-link').click(function() {
						jQuery(document).scrollTo('#configurator', 2000, 'ease');
					});

					jQuery('.call-to-action .single_add_to_cart_button').text('Place Deposit');

				});
			</script>

			<?php

				global $post;
				$post_slug = $post->post_name;

				$args = array(
					'post_type' => 'product',
			        'name' => $post_slug . '-deposit',
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<div class="deposit-form">
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
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
							do_action( 'woocommerce_single_product_summary' );
						?>
					</div>

			    <?php endwhile; ?>

			<?php endif; ?>

			<p>We are here to help guide you. <a href="mailto:info@breadwinnercycles.com">Email us</a> and expect a reply in 24 hours or less.</p>

			<p>Use our <a href="#configurator" class="configurator-link">Bike Builder</a> to spec out a Breadwinner frameset or complete bike.</p>

		</div>

	</div>

	<div class="section-header">

		<h4>Features &amp; Options</h4>

	</div>

	<div class="highlight-gallery">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( get_field('highlight_gallery') ) : ?>

				<?php

				$images = get_field('highlight_gallery');

				if( $images ): ?>
					<?php foreach( $images as $image ): ?>

						<div class="highlight-image">
							<a data-my-caption="<?php echo $image['caption']; ?>" href="<?php echo $image[url]; ?>">
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

		<?php endwhile; ?>

	</div>

	<?php while ( have_posts() ) : the_post(); ?>
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

	<?php endwhile; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="geometry-image-with-content image-with-content">

			<div class="content">
				<div class="section-header">

					<h4>Geometry</h4>

				</div>

				<div class="geometry-text">
					<?php the_field('bike_diagram_text', 5248); ?>
				</div>
			</div>

			<div class="image">

				<?php $mobile = wp_get_attachment_image_src(get_field('bike_drawing'), 'geo-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('bike_drawing'), 'geo-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('bike_drawing'), 'geo-desktop'); ?>

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

		<div id="configurator" class="section-header">

			<h4>Bike Builder</h4>

		</div>

		<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="product-top">

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
								<span>&nbsp;&mdash;&nbsp;</span>
							</div>

							<div class="cockpit">
								<strong>Cockpit:</strong>
								<span>&nbsp;&mdash;&nbsp;</span>
							</div>

							<div class="wheelset">
								<strong>Wheelset:</strong>
								<span>&nbsp;&mdash;&nbsp;</span>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="section-header">

				<h4>Our Process</h4>

			</div>

			<meta itemprop="url" content="<?php the_permalink(); ?>" />

		</div><!-- #product-<?php the_ID(); ?> -->

		<?php do_action( 'woocommerce_after_single_product' ); ?>

		<?php $post_slug = $post->post_name; ?>

	<?php endwhile; ?>

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
										<strong><?php the_sub_field('step_title'); ?></strong>
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
											<img srcset="<?php echo $image[0]; ?>">
										</picture>
									</a>

								</div>

							<?php endforeach; ?>
						<?php endif; ?>

					</div>

				<?php endif; ?>

			</div>

			<div class="summary entry-summary">

				<div class="goods-product-title">
					<h1><?php the_title(); ?></h1>
				</div>

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

<?php elseif( has_term('invoice','product_cat') ) : ?>

	<div class="invoice">

		<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
			do_action( 'woocommerce_before_main_content' );
		?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="summary">
				<div class="goods-product-title">
					<h1><?php the_title(); ?></h1>
				</div>

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
				<script>
				jQuery(document).ready(function(){
					jQuery('.invoice .single_add_to_cart_button').html('Pay Invoice');
				});
				</script>
			</div>

			<div class="image">
				<div class="download-invoice">
					<a href="<?php the_field('pdf'); ?>">
						<img src="http://breadwinnercycles.com/wp-content/uploads/2016/03/document.png" />
						<h6>PDF Invoice</h6>
					</a>
				</div>
				<hr />
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

<?php else: ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php do_action( 'woocommerce_single_product_summary' ); ?>

	<?php endwhile; ?>

<?php endif; ?>
