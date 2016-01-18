<?php
/**
 * Template Name: Modules
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
			// centered: true,
			accessibility: false,
			mobileFirst: false,
		    lazyLoad: 'ondemand',
		});

		jQuery('.highlight-gallery').slick({
			arrows: true,
			dots: false,
			slidesToShow: 3,
			autoplay: false,
			autoplaySpeed: 3000,
			pauseOnHover: true,
			centered: true,
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

								<div class="slide-caption">
									<?php the_sub_field('slider_caption'); ?>
								</div>

								<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'product-banner-mobile'); ?>
								<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'product-banner-tablet'); ?>
								<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'product-banner-desktop'); ?>
								<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'product-banner-retina'); ?>

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

							</a>
						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

		</div>

		<div class="scroll-for-content">

			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
				 y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
			<path d="M13.418,7.859c0.271-0.268,0.709-0.268,0.978,0c0.27,0.268,0.272,0.701,0,0.969l-3.908,3.83
				c-0.27,0.268-0.707,0.268-0.979,0l-3.908-3.83c-0.27-0.267-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.978,0L10,11L13.418,7.859z
				"/>
			</svg>

		</div>

		<!-- End Full Width Slider w/ caption and content arrow -->

		<div class="large-open-section-container">
			<div class="large-open-section">
				<h3><?php the_field('large_copy_section'); ?></h3>
			</div>
		</div>

		<!-- End Large copy section -->

		<div class="double-images">
			<div class="image-one">
				<?php $mobile = wp_get_attachment_image_src(get_field('image_one'), 'product-banner-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('image_one'), 'product-banner-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('image_one'), 'product-banner-desktop'); ?>
				<?php $retina = wp_get_attachment_image_src(get_field('image_one'), 'product-banner-retina'); ?>

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
				<?php $mobile = wp_get_attachment_image_src(get_field('image_two'), 'product-banner-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('image_two'), 'product-banner-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('image_two'), 'product-banner-desktop'); ?>
				<?php $retina = wp_get_attachment_image_src(get_field('image_two'), 'product-banner-retina'); ?>

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
				<h3><?php the_field('large_copy_section'); ?></h3>
			</div>
		</div>

		<!-- End Large copy section -->

		<div class="full-width-banner">
			<?php $mobile = wp_get_attachment_image_src(get_field('banner_image'), 'banner-mobile'); ?>
			<?php $tablet = wp_get_attachment_image_src(get_field('banner_image'), 'banner-tablet'); ?>
			<?php $desktop = wp_get_attachment_image_src(get_field('banner_image'), 'banner-desktop'); ?>
			<?php $retina = wp_get_attachment_image_src(get_field('banner_image'), 'banner-retina'); ?>

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

		<div class="large-open-section-container">
			<div class="large-open-section">
				<img src="<?php the_field('large_logo'); ?>" />
			</div>
		</div>

		<!-- End Large logo section -->

		<div class="section-header">

			<h4>Road</h4>

		</div>

		<!-- End Section header -->

		<div class="section-title">

			<h2>Handbuilt in Portland, Oregon</h2>

		</div>

		<!-- End Section title -->

		<div class="image-with-content">

			<div class="image">

				<?php $mobile = wp_get_attachment_image_src(get_field('image'), 'portal-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('image'), 'portal-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('image'), 'portal-desktop'); ?>

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

				<div class="caption">
					<?php the_field('caption'); ?>
				</div>
			</div>

			<div class="content">
				<?php the_field('content'); ?>
			</div>

		</div>

		<!-- End Image with content -->

		<div class="section-title">

			<h2>Our Process</h2>

		</div>

		<!-- End Section title -->

		<div class="process-list">

			<div class="number-row">

				<div class="number">
					<div class="disc">&nbsp;</div>
					<div class="number">1</div>
				</div>

				<div class="content">
					Whether you are designing the bike of your dreams or just want to start the process, it all starts with a $500 deposit.
				</div>

			</div>

			<div class="number-row">

				<div class="number">
					<div class="disc">&nbsp;</div>
					<div class="number">2</div>
				</div>

				<div class="content">
					We follow up to walk you through sizing and component options. We offer many choices to help fit your budget and dreams.
				</div>

			</div>

			<div class="number-row">

				<div class="number">
					<div class="disc">&nbsp;</div>
					<div class="number">3</div>
				</div>

				<div class="content">
					Once the details are settled, we’ll begin production.
				</div>

			</div>

			<div class="number-row">

				<div class="number">
					<div class="disc">&nbsp;</div>
					<div class="number">4</div>
				</div>

				<div class="content">
					When your bike is ready, we’ll invoice you for the balance and ship it to your door within 8-12 weeks of placing your order.
				</div>

			</div>

			<div class="number-row">

				<div class="number">
					<div class="disc">&nbsp;</div>
					<div class="number">1</div>
				</div>

				<div class="content">
					We follow up to walk you through sizing and component options. We offer many choices to help fit your budget and dreams.
				</div>

			</div>

		</div>

		<!-- End Process list -->

		<div class="large-button">

			<button class="button">Learn More</button>

		</div>

		<!-- End Large button -->

		<div class="portal-container">

			<div class="content-portal">

				<a href="<?php the_field('content_portal_link'); ?>">
					<?php $mobile = wp_get_attachment_image_src(get_field('content_portal_image'), 'portal-mobile'); ?>
					<?php $tablet = wp_get_attachment_image_src(get_field('content_portal_image'), 'portal-tablet'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_field('content_portal_image'), 'portal-desktop'); ?>

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
						<h3><?php the_field('content_portal_text'); ?></h3>
					</div>
				</a>

			</div>

			<div class="content-portal">

				<?php $mobile = wp_get_attachment_image_src(get_field('mailing_list_image'), 'portal-mobile'); ?>
				<?php $tablet = wp_get_attachment_image_src(get_field('mailing_list_image'), 'portal-tablet'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('mailing_list_image'), 'portal-desktop'); ?>

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
					<h3><?php the_field('mailing_list_text'); ?></h3>
					<?php echo do_shortcode('[epm_mailchimp]'); ?>
				</div>

			</div>

		</div>

		<!-- End Portals -->

		<?php if( have_rows('alternating_section') ) : ?>

			<div class="even-alternating">

				<?php $oddpost = 'odd-row'; ?>
				<?php while ( have_rows('alternating_section') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'section' ) : ?>

						<div class="alternating-section <?php echo $oddpost; ?>">

							<?php if( $oddpost == 'even-row') : ?>
								<div class="image">
									<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'portal-mobile'); ?>
									<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'portal-tablet'); ?>
									<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'portal-desktop'); ?>

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
										<img src="<?php the_sub_field('step_image'); ?>" alt="step image" />
									</div>
									<div class="description">
										<?php the_sub_field('content'); ?>
									</div>


								</div>

							<?php else: ?>

								<div class="content">

									<div class="step">
										<img src="<?php the_sub_field('step_image'); ?>" alt="step image" />
									</div>
									<div class="description">
										<?php the_sub_field('content'); ?>
									</div>

								</div>

								<div class="image">
									<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'portal-mobile'); ?>
									<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'portal-tablet'); ?>
									<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'portal-desktop'); ?>

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

			<!-- End Alternating section -->

			<div class="image-and-process">

				<div class="image">

					<?php $mobile = wp_get_attachment_image_src(get_field('image'), 'portal-mobile'); ?>
					<?php $tablet = wp_get_attachment_image_src(get_field('image'), 'portal-tablet'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_field('image'), 'portal-desktop'); ?>

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

					<div class="caption">
						<?php the_field('caption'); ?>
					</div>

				</div>

				<div class="process-list">

					<div class="number-row">

						<div class="number">
							<div class="disc">&nbsp;</div>
							<div class="number">1</div>
						</div>

						<div class="content">
							Whether you are designing the bike of your dreams or just want to start the process, it all starts with a $500 deposit.
						</div>

					</div>

					<div class="number-row">

						<div class="number">
							<div class="disc">&nbsp;</div>
							<div class="number">2</div>
						</div>

						<div class="content">
							We follow up to walk you through sizing and component options. We offer many choices to help fit your budget and dreams.
						</div>

					</div>

					<div class="number-row">

						<div class="number">
							<div class="disc">&nbsp;</div>
							<div class="number">3</div>
						</div>

						<div class="content">
							Once the details are settled, we’ll begin production.
						</div>

					</div>

					<div class="number-row">

						<div class="number">
							<div class="disc">&nbsp;</div>
							<div class="number">4</div>
						</div>

						<div class="content">
							When your bike is ready, we’ll invoice you for the balance and ship it to your door within 8-12 weeks of placing your order.
						</div>

					</div>

					<div class="number-row">

						<div class="number">
							<div class="disc">&nbsp;</div>
							<div class="number">1</div>
						</div>

						<div class="content">
							We follow up to walk you through sizing and component options. We offer many choices to help fit your budget and dreams.
						</div>

					</div>

				</div>

			</div>

		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

	<div class="section-header">

		<h4>Road</h4>

	</div>

	<!-- End Section header -->

	<div class="bike-portals">

		<?php

		    $args = array(
		        'post_type' => 'product',
				'tax_query' => array(
					relation => 'AND',
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'bikes',
					),
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'road',
					),
				),
		    );
		    $query = new WP_Query($args);

		    if($query->have_posts()) : ?>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<div class="portal">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<div class="overlay">&nbsp;</div>
						<h6 class="title"><?php the_title() ?></h6>
					</a>
				</div>

		    <?php endwhile; ?>

		<?php endif; ?>

	</div>

	<div class="section-header">

		<h4>Dirt</h4>

	</div>

	<!-- End Section header -->

	<div class="bike-portals">

		<?php

		    $args = array(
		        'post_type' => 'product',
				'tax_query' => array(
					relation => 'AND',
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'bikes',
					),
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'dirt',
					),
				),
		    );
		    $query = new WP_Query($args);

		    if($query->have_posts()) : ?>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<div class="portal">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<div class="overlay">&nbsp;</div>
						<h6 class="title"><?php the_title() ?></h6>
					</a>
				</div>

		    <?php endwhile; ?>

		<?php endif; ?>

	</div>

	<div class="section-header">

		<h4>Mountain</h4>

	</div>

	<!-- End Section header -->

	<div class="bike-portals">

		<?php

		    $args = array(
		        'post_type' => 'product',
				'tax_query' => array(
					relation => 'AND',
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'bikes',
					),
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'mountain',
					),
				),
		    );
		    $query = new WP_Query($args);

		    if($query->have_posts()) : ?>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<div class="portal">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<div class="overlay">&nbsp;</div>
						<h6 class="title"><?php the_title() ?></h6>
					</a>
				</div>

		    <?php endwhile; ?>

		<?php endif; ?>

	</div>

	<!-- End bike portals -->

	<div class="section-header">

		<h4>Specs</h4>

	</div>

	<!-- End Section header -->

	<div class="specs">

		<?php

		    $args = array(
		        'post_type' => 'product',
				'p' => '5361',
		    );
		    $query = new WP_Query($args);

		    if($query->have_posts()) : ?>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<?php if( have_rows('specs') ) : ?>

					<div class="spec-container">

					    <?php while ( have_rows('specs') ) : ?>

					        <?php the_row(); ?>
								<div class="spec">
						        	<?php the_sub_field('spec'); ?>
								</div>

					    <?php endwhile; ?>

					</div>

				<?php endif; ?>


		    <?php endwhile; ?>

		<?php endif; ?>

	</div>

	<!-- End bike specs -->

	<div class="highlight-gallery">

		<?php if( get_field('highlight_gallery') ) : ?>

			<?php

			$images = get_field('highlight_gallery');

			if( $images ): ?>
				<?php foreach( $images as $image ): ?>

					<div class="portal-image">
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

<?php get_footer(); ?>
