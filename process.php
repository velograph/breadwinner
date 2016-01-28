<?php
/**
 * Template Name: Process
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

	<div class="full-width-banner">
		<?php $mobile = wp_get_attachment_image_src(get_field('banner_image', 5248), 'banner-mobile'); ?>
		<?php $tablet = wp_get_attachment_image_src(get_field('banner_image', 5248), 'banner-tablet'); ?>
		<?php $desktop = wp_get_attachment_image_src(get_field('banner_image', 5248), 'banner-desktop'); ?>
		<?php $retina = wp_get_attachment_image_src(get_field('banner_image', 5248), 'banner-retina'); ?>

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
		<div class="page-title">
			PROCESS
		</div>

	</div>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="large-open-section-container">
			<div class="large-open-section">
				<h3><?php the_field('lead_in'); ?></h3>
			</div>
		</div>

		<?php if( have_rows('process_sections') ) : ?>

			<div class="even-alternating">

				<?php $oddpost = 'odd-row'; ?>
				<?php while ( have_rows('process_sections') ) : ?>

					<?php the_row(); ?>

					<?php if( get_row_layout() == 'process_section' ) : ?>

						<div class="alternating-section <?php echo $oddpost; ?>">

							<?php if( $oddpost == 'even-row') : ?>
								<div class="image">
									<?php $mobile = wp_get_attachment_image_src(get_sub_field('step_image'), 'portal-mobile'); ?>
									<?php $tablet = wp_get_attachment_image_src(get_sub_field('step_image'), 'portal-tablet'); ?>
									<?php $desktop = wp_get_attachment_image_src(get_sub_field('step_image'), 'portal-desktop'); ?>

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

									<div class="step">
										<img src="<?php the_sub_field('step_number'); ?>" alt="step_number" />
									</div>
									<div class="description">
										<?php the_sub_field('step_description'); ?>
									</div>


								</div>

							<?php else: ?>

								<div class="content">

									<div class="step">
										<img src="<?php the_sub_field('step_number'); ?>" alt="step_number" />
									</div>
									<div class="description">
										<?php the_sub_field('step_description'); ?>
									</div>

								</div>

								<div class="image">
									<?php $mobile = wp_get_attachment_image_src(get_sub_field('step_image'), 'portal-mobile'); ?>
									<?php $tablet = wp_get_attachment_image_src(get_sub_field('step_image'), 'portal-tablet'); ?>
									<?php $desktop = wp_get_attachment_image_src(get_sub_field('step_image'), 'portal-desktop'); ?>

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

							<?php endif; ?>

						</div>

					<?php endif; ?>

					<?php /* Changes every other post to a different class */
						if ('odd-row' == $oddpost) $oddpost = 'even-row';
						else $oddpost = 'odd-row';
					?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

		<div class="section-title">

			<h2><?php the_field('process_wrap_up_title'); ?></h2>

		</div>

		<div class="large-open-section-container">
			<div class="large-open-section">
				<h3><?php the_field('process_wrap_up_copy'); ?></h3>
			</div>
		</div>

		<div class="large-button">

			<button class="button">Learn More</button>

		</div>

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

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
