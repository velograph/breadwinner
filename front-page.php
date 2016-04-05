<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

<script>
	jQuery(document).ready(function(){

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

	});
</script>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="full-width-slider">

			<?php if( have_rows('full_width_slider') ) : ?>

				<?php while ( have_rows('full_width_slider') ) : ?>

					<?php the_row(); ?>

					<?php if( get_row_layout() == 'slider_image' ) : ?>

						<div class="slide">
							<a href="<?php the_sub_field('slider_link'); ?>">

								<?php $mobile = wp_get_attachment_image_src(get_sub_field('full_width_slider_image'), 'full-width-slider-mobile'); ?>
								<?php $tablet = wp_get_attachment_image_src(get_sub_field('full_width_slider_image'), 'full-width-slider-tablet'); ?>
								<?php $desktop = wp_get_attachment_image_src(get_sub_field('full_width_slider_image'), 'full-width-slider-desktop'); ?>
								<?php $retina = wp_get_attachment_image_src(get_sub_field('full_width_slider_image'), 'full-width-slider-retina'); ?>

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

								<div class="slide-caption">
									<?php the_sub_field('slider_caption'); ?>
								</div>

							</a>
						</div>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>

		<!-- End Full Width Slider w/ caption and content arrow -->

		<div class="large-open-section-container">
			<div class="large-open-section">
				<h3><?php the_field('lead_in_top_copy'); ?></h3>
			</div>
		</div>

		<!-- End Large copy section -->

		<div class="double-images">
			<div class="image-one">
				<?php $mobile = wp_get_attachment_image_src(get_field('first_production_image'), 'product-banner-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('first_production_image'), 'product-banner-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('first_production_image'), 'product-banner-desktop'); ?>
				<?php $retina = wp_get_attachment_image_src(get_field('first_production_image'), 'product-banner-retina'); ?>

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
			</div>

			<div class="image-two">
				<?php $mobile = wp_get_attachment_image_src(get_field('second_production_image'), 'product-banner-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('second_production_image'), 'product-banner-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('second_production_image'), 'product-banner-desktop'); ?>
				<?php $retina = wp_get_attachment_image_src(get_field('second_production_image'), 'product-banner-retina'); ?>

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
			</div>

		</div>

		<!-- End double images -->

		<div class="large-open-section-container">
			<div class="large-open-section">
				<h3><?php the_field('lead_in_bottom_copy'); ?></h3>
			</div>
		</div>

		<!-- End Large copy section -->

		<div class="full-width-banner">
			<?php $mobile = wp_get_attachment_image_src(get_field('lead_in_banner'), 'banner-mobile'); ?>
			<?php $tablet = wp_get_attachment_image_src(get_field('lead_in_banner'), 'banner-tablet'); ?>
			<?php $desktop = wp_get_attachment_image_src(get_field('lead_in_banner'), 'banner-desktop'); ?>
			<?php $retina = wp_get_attachment_image_src(get_field('lead_in_banner'), 'banner-retina'); ?>

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
		</div>

		<!-- End full width banner -->

		<?php get_template_part('bike', 'portals'); ?>

		<div class="section-title">

			<h2><?php the_field('handbuilt_title'); ?></h2>

		</div>

		<!-- End Section title -->

		<div class="image-with-content">

			<div class="image">

				<?php $mobile = wp_get_attachment_image_src(get_field('handbuilt_image'), 'portal-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('handbuilt_image'), 'portal-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('handbuilt_image'), 'portal-desktop'); ?>

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

			<div class="content">
				<?php the_field('handbuilt_copy'); ?>
			</div>

		</div>

		<!-- End Image with content -->

		<div class="full-width-banner">
			<?php $mobile = wp_get_attachment_image_src(get_field('process_banner'), 'banner-mobile'); ?>
			<?php $tablet = wp_get_attachment_image_src(get_field('process_banner'), 'banner-tablet'); ?>
			<?php $desktop = wp_get_attachment_image_src(get_field('process_banner'), 'banner-desktop'); ?>
			<?php $retina = wp_get_attachment_image_src(get_field('process_banner'), 'banner-retina'); ?>

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
		</div>

		<!-- End full width banner -->

		<div class="section-title">

			<h2>Our Process</h2>

		</div>

		<!-- End Section title -->

		<div class="large-process-list">

			<?php if( have_rows('process_sections', 18) ) : ?>

				<div class="process-list">

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

				</div>

			<?php endif; ?>

		</div>

		<!-- End Process list -->

		<div class="large-button">

			<a href="/process" class="button">Learn More about Our Process</a>

		</div>

		<!-- End Large button -->

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
