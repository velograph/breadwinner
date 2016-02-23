<?php
/**
 * Template Name: Story
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Breadwinner Cycles
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="large-open-section-container">
			<div class="large-open-section">
				<h3><?php the_field('story_lead_in'); ?></h3>
			</div>
		</div>

		<?php if( have_rows('before_breadwinner_sections') ) : ?>

			<div class="double-images">

			    <?php while ( have_rows('before_breadwinner_sections') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'before_section' ) : ?>

						<div class="image-one-before image-one">
							<?php $mobile = wp_get_attachment_image_src(get_sub_field('tony_before_image'), 'product-banner-mobile'); ?>
							<?php $tablet = wp_get_attachment_image_src(get_sub_field('tony_before_image'), 'product-banner-tablet'); ?>
							<?php $desktop = wp_get_attachment_image_src(get_sub_field('tony_before_image'), 'product-banner-desktop'); ?>
							<?php $retina = wp_get_attachment_image_src(get_sub_field('tony_before_image'), 'product-banner-retina'); ?>

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

							<div class="image-content">
								<p><?php the_sub_field('tony_before_content'); ?></p>
							</div>

						</div>

						<div class="image-two-before image-two">
							<?php $mobile = wp_get_attachment_image_src(get_sub_field('ira_before_image'), 'product-banner-mobile'); ?>
							<?php $tablet = wp_get_attachment_image_src(get_sub_field('ira_before_image'), 'product-banner-tablet'); ?>
							<?php $desktop = wp_get_attachment_image_src(get_sub_field('ira_before_image'), 'product-banner-desktop'); ?>
							<?php $retina = wp_get_attachment_image_src(get_sub_field('ira_before_image'), 'product-banner-retina'); ?>

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

							<div class="image-content">
								<p><?php the_sub_field('ira_before_content'); ?></p>
							</div>

						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			</div>

		<?php endif; ?>

		<?php if( have_rows('after_breadwinner_sections') ) : ?>

		    <?php while ( have_rows('after_breadwinner_sections') ) : ?>

		        <?php the_row(); ?>

		        <?php if( get_row_layout() == 'after_section' ) : ?>

					<?php if(get_sub_field('one_or_two_images')) : ?>
						<div class="double-images">
							<div class="image-one-after image-one">
								<?php $mobile = wp_get_attachment_image_src(get_sub_field('first_image'), 'product-banner-mobile'); ?>
								<?php $tablet = wp_get_attachment_image_src(get_sub_field('first_image'), 'product-banner-tablet'); ?>
								<?php $desktop = wp_get_attachment_image_src(get_sub_field('first_image'), 'product-banner-desktop'); ?>
								<?php $retina = wp_get_attachment_image_src(get_sub_field('first_image'), 'product-banner-retina'); ?>

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

							<div class="image-two-after image-two">
								<?php $mobile = wp_get_attachment_image_src(get_sub_field('second_image'), 'product-banner-mobile'); ?>
								<?php $tablet = wp_get_attachment_image_src(get_sub_field('second_image'), 'product-banner-tablet'); ?>
								<?php $desktop = wp_get_attachment_image_src(get_sub_field('second_image'), 'product-banner-desktop'); ?>
								<?php $retina = wp_get_attachment_image_src(get_sub_field('second_image'), 'product-banner-retina'); ?>

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

					<?php else: ?>

						<div class="full-width-banner">
							<?php $mobile = wp_get_attachment_image_src(get_sub_field('after_image'), 'banner-mobile'); ?>
							<?php $tablet = wp_get_attachment_image_src(get_sub_field('after_image'), 'banner-tablet'); ?>
							<?php $desktop = wp_get_attachment_image_src(get_sub_field('after_image'), 'banner-desktop'); ?>
							<?php $retina = wp_get_attachment_image_src(get_sub_field('after_image'), 'banner-retina'); ?>

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

					<?php endif; ?>

					<div class="large-open-section-container">
						<div class="large-open-section">
							<p><?php the_sub_field('after_content'); ?></p>
						</div>
					</div>

		        <?php endif; ?>

		    <?php endwhile; ?>

			<div class="large-button">

				<a href="/product-category/bikes/" class="button">View the Breadwinner Lineup</a>

			</div>

		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
