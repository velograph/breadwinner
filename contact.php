<?php
/**
 * Template Name: Contact
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

		<div class="page-container">

			<div class="page-content">
				<h1><?php the_title(); ?></h1>
				<?php get_template_part( 'content', 'page' ); ?>

				<div class="social-media">
					<h3>Follow Us</h3>
					<div class="social-media-link facebook">
						<a href="https://www.facebook.com/BreadwinnerCycles/" target="_blank">
							<svg viewBox="0 0 18 18">
							    <g id="Page-1" stroke="none" stroke-width="1"  fill-rule="evenodd" sketch:type="MSPage">
							        <g id="facebook" sketch:type="MSLayerGroup">
							            <path d="M16,0 L2,0 C0.9,0 0,0.9 0,2 L0,16 C0,17.101 0.9,18 2,18 L9,18 L9,11 L7,11 L7,8.525 L9,8.525 L9,6.475 C9,4.311 10.212,2.791 12.766,2.791 L14.569,2.793 L14.569,5.398 L13.372,5.398 C12.378,5.398 12,6.144 12,6.836 L12,8.526 L14.568,8.526 L14,11 L12,11 L12,18 L16,18 C17.1,18 18,17.101 18,16 L18,2 C18,0.9 17.1,0 16,0 L16,0 Z" id="Shape" sketch:type="MSShapeGroup"></path>
							        </g>
							    </g>
							</svg>
						</a>
					</div>
					<div class="social-media-link instagram">
						<a href="http://instagram.com/breadwinnercycles/" target="_blank">
							<svg viewBox="0 0 18 18">
							    <g id="Page-1" stroke="none" stroke-width="1"  fill-rule="evenodd" sketch:type="MSPage">
							        <g id="instagram" sketch:type="MSLayerGroup">
							            <path d="M16,0 L2,0 C0.9,0 0,0.9 0,2 L0,16 C0,17.101 0.9,18 2,18 L16,18 C17.1,18 18,17.101 18,16 L18,2 C18,0.9 17.1,0 16,0 L16,0 Z M8.984,14.523 C12.043,14.523 14.522,12.042 14.522,8.984 C14.522,8.646 14.479,8.32 14.419,8 L16,8 L16,15.216 C16,15.598 15.69,15.906 15.307,15.906 L2.693,15.906 C2.31,15.906 2,15.598 2,15.216 L2,8 L3.549,8 C3.488,8.32 3.445,8.646 3.445,8.984 C3.445,12.043 5.926,14.523 8.984,14.523 L8.984,14.523 Z M5.523,8.984 C5.523,7.072 7.073,5.523 8.985,5.523 C10.896,5.523 12.447,7.072 12.447,8.984 C12.447,10.896 10.896,12.446 8.985,12.446 C7.072,12.446 5.523,10.896 5.523,8.984 L5.523,8.984 Z M15.307,5 L13.692,5 C13.31,5 13,4.688 13,4.308 L13,2.691 C13,2.309 13.31,2 13.691,2 L15.306,2 C15.69,2 16,2.309 16,2.691 L16,4.307 C16,4.688 15.69,5 15.307,5 L15.307,5 Z" id="Shape" sketch:type="MSShapeGroup"></path>
							        </g>
							    </g>
							</svg>
						</a>
					</div>
					<div class="social-media-link twitter">
						<a href="https://twitter.com/ridebreadwinner" target="_blank">
							<svg viewBox="0 0 20 16">
							    <g id="Page-1" stroke="none" stroke-width="1"  fill-rule="evenodd" sketch:type="MSPage">
							        <g id="twitter" sketch:type="MSLayerGroup">
							            <path d="M17.316,4.246 C17.324,4.408 17.327,4.572 17.327,4.734 C17.327,9.724 13.53,15.476 6.587,15.476 C4.454,15.476 2.471,14.851 0.8,13.779 C1.096,13.814 1.396,13.832 1.7,13.832 C3.47,13.832 5.097,13.228 6.388,12.217 C4.737,12.186 3.342,11.096 2.862,9.596 C3.092,9.639 3.329,9.662 3.572,9.662 C3.917,9.662 4.251,9.617 4.567,9.531 C2.84,9.183 1.539,7.658 1.539,5.828 L1.539,5.781 C2.048,6.064 2.631,6.234 3.249,6.254 C2.236,5.576 1.569,4.422 1.569,3.111 C1.569,2.42 1.755,1.771 2.081,1.213 C3.942,3.498 6.725,5 9.862,5.158 C9.798,4.881 9.765,4.594 9.765,4.297 C9.765,2.213 11.454,0.524 13.539,0.524 C14.625,0.524 15.606,0.981 16.295,1.715 C17.154,1.545 17.962,1.231 18.692,0.799 C18.41,1.68 17.811,2.42 17.032,2.887 C17.796,2.795 18.522,2.594 19.2,2.293 C18.694,3.051 18.054,3.715 17.316,4.246 L17.316,4.246 Z" id="Shape" sketch:type="MSShapeGroup"></path>
							        </g>
							    </g>
							</svg>
						</a>
					</div>
				</div>
			</div>

		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
