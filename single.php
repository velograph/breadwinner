<?php
/**
 * The template for displaying all single posts.
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
		BLOG
	</div>

</div>

<?php if ( have_posts() ) : ?>

	<div class="blog-posts">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="post">

				<?php if( has_post_format('image', $post->ID) ) : ?>
					<div class="content">
						<?php the_title(); ?>
						<hr />
						<?php the_tags(); ?>
						<h6>Posted on: <?php the_time('F jS, Y'); ?></h6>
					</div>

					<div class="image">
						<?php the_post_thumbnail('full'); ?>
					</div>
				<?php elseif( has_post_format('aside', $post->ID) ) : ?>
					<div class="content">
						<?php the_content(); ?>
						<hr />
						<?php the_tags(); ?>
						<h6>Posted on: <?php the_time('F jS, Y'); ?></h6>
					</div>

					<div class="image">
						<?php the_post_thumbnail('full'); ?>
					</div>
				<?php else: ?>
					<div class="full-width-content">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>

						<script>
							jQuery(document).ready(function(){
								jQuery('.blog-gallery').slickLightbox({
									caption: 'my-caption',
								});

								jQuery('.blog-gallery').slick({
								  slidesToShow: 1,
								  slidesToScroll: 1,
								  accessibility: true,
								  arrows: true,
								  asNavFor: '.blog-gallery-thumbs',
								  lazyLoad: 'progressive',
								});

								jQuery('.blog-gallery-thumbs').slick({
								  slidesToShow: 'all',
								  slidesToScroll: 1,
								  accessibility: true,
								  arrows: false,
								  asNavFor: '.blog-gallery',
								  dots: false,
								  focusOnSelect: true
								});
							});
						</script>

						<?php if( get_field('gallery') ) : ?>
							<div class="gallery-container">
								<div class="blog-gallery">
									<?php

									$images = get_field('gallery');

									if( $images ): ?>
										<?php foreach( $images as $image ): ?>

											<div class="slide">
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
															media="(min-width: 861px)" />
														<!--[if IE 9]></video><![endif]-->
														<img data-lazy="<?php echo $image[0]; ?>">
													</picture>
												</a>
												<em><?php echo $image['caption']; ?></em>
											</div>

										<?php endforeach; ?>
									<?php endif; ?>
								</div>

								<div class="blog-gallery-thumbs">
									<?php

									$images = get_field('gallery');

									if( $images ): ?>
										<?php foreach( $images as $image ): ?>

											<div class="slide">
												<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
											</div>

										<?php endforeach; ?>
									<?php endif; ?>

								<?php endif; ?>
							</div>
						</div>

						<hr />
						<?php the_tags(); ?>
						<h6>Posted on: <?php the_time('F jS, Y'); ?></h6>
					</div>
				<?php endif; ?>

			</div>

		<?php endwhile; ?>

	</div>

	<div class="post-navigation">
		<div class="older"><?php next_posts_link( '&laquo; Older', '' ); ?></div>
		<div class="newer"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
	</div>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php get_footer(); ?>
