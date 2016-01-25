<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<script>
	jQuery(document).ready(function(){

		jQuery('.component_options_select').change(function() {
			$price = jQuery('.composite_price .amount').html();
			// alert($price);
		});

		jQuery('.full-width-slider').slick({
			arrows: true,
			dots: false,
			autoplay: false,
			autoplaySpeed: 3000,
			pauseOnHover: true,
			accessibility: false,
			mobileFirst: false,
		    lazyLoad: 'ondemand',
		});

		jQuery('.highlight-gallery').slick({
			arrows: true,
			dots: false,
			autoplay: false,
			autoplaySpeed: 3000,
			accessibility: false,
			mobileFirst: false,
			pauseOnHover: true,
		    lazyLoad: 'ondemand',
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 5000,
					settings: {
						slidesToShow: 3,
					}
				}
			]
		});

	});
</script>

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
								<img srcset="<?php echo $image[0]; ?>">
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

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="large-open-section-container">
				<div class="large-open-section">
					<h3><?php the_content(); ?></h3>
				</div>
			</div>

			<div class="section-title">

				<h2><?php the_field('builder_title'); ?></h2>

			</div>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

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

		<div class="portal-container">

			<div class="content-portal">

				<a href="<?php the_field('process_portal_link', 5248); ?>">
					<?php $mobile = wp_get_attachment_image_src(get_field('process_portal_image', 5248), 'portal-mobile'); ?>
					<?php $tablet = wp_get_attachment_image_src(get_field('process_portal_image', 5248), 'portal-tablet'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_field('process_portal_image', 5248), 'portal-desktop'); ?>

					<picture class="image">
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

					<div class="caption">
						<a href="<?php the_field(); ?>">
						<?php the_field('process_portal_text', 5248); ?>
					</div>
				</a>

			</div>

			<div class="content-portal">

				<?php $mobile = wp_get_attachment_image_src(get_field('mailing_list_image', 5248), 'portal-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('mailing_list_image', 5248), 'portal-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('mailing_list_image', 5248), 'portal-desktop'); ?>

				<picture class="image">
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

				<div class="content">
					<h3><?php the_field('mailing_list_text', 5248); ?></h3>
					<?php echo do_shortcode('[epm_mailchimp]'); ?>
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

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
