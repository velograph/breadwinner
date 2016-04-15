<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Breadwinner Cycles
 */
?>

	<?php if( is_page('checkout') || is_page('cart') || is_product() ) : ?>
	<!-- Do Nothing -->
	<?php else: ?>

		<div class="portal-container">

			<div class="content-portal">

				<?php if( is_front_page() ) : ?>

					<a href="/product-category/bikes/">
						<?php $mobile = wp_get_attachment_image_src(get_field('bike_portal_image', 5248), 'portal-mobile'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('bike_portal_image', 5248), 'portal-tablet'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('bike_portal_image', 5248), 'portal-desktop'); ?>

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
						<div class="overlay"></div>
						<div class="caption">
							<a href="<?php the_field(); ?>">
							<?php the_field('bike_portal_text', 5248); ?>
						</div>
					</a>

				<?php elseif( is_page('process') || is_single() || is_product_category( array('goods','apparel','accessories') ) ) : ?>

					<a href="/story">
						<?php $mobile = wp_get_attachment_image_src(get_field('story_portal_image', 5248), 'portal-mobile'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('story_portal_image', 5248), 'portal-tablet'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('story_portal_image', 5248), 'portal-desktop'); ?>

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
						<div class="overlay"></div>
						<div class="caption">
							<a href="/story">
							<?php the_field('story_portal_text', 5248); ?>
						</div>
					</a>

				<?php elseif( is_page('story') || is_product_category( array('bikes','road','dirt','mountain') ) || is_product() ) : ?>

					<a href="/process">
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
						<div class="overlay"></div>
						<div class="caption">
							<a href="/process">
							<?php the_field('process_portal_text', 5248); ?>
						</div>
					</a>

				<?php else : ?>

					<a href="/story">
						<?php $mobile = wp_get_attachment_image_src(get_field('story_portal_image', 5248), 'portal-mobile'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('story_portal_image', 5248), 'portal-tablet'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('story_portal_image', 5248), 'portal-desktop'); ?>

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
						<div class="overlay"></div>
						<div class="caption">
							<a href="/story">
							<?php the_field('story_portal_text', 5248); ?>
						</div>
					</a>

				<?php endif; ?>

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
					<p><?php the_field('mailing_list_text', 5248); ?></p>
					<?php echo do_shortcode('[epm_mailchimp]'); ?>
				</div>

			</div>

		</div>

	<?php endif; ?>

	<div class="instagram">
		<?php echo do_shortcode('[instagram-feed showbutton=false showheader=false showfollow=false]'); ?>
	</div>

	<footer class="footer">
		<div class="inner-container">
			<div class="footer-logo">
				<svg viewBox="0 0 193 112">
				    <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage">
				        <g id="Desktop" sketch:type="MSArtboardGroup" transform="translate(-110.000000, -9097.000000)">
				            <g id="Instagram-Feed-+-Footer" sketch:type="MSLayerGroup" transform="translate(0.000000, 8879.000000)">
				                <g id="Footer" transform="translate(0.000000, 175.000000)" sketch:type="MSShapeGroup">
				                    <g id="Group" transform="translate(110.000000, 43.000000)">
				                        <g id="Diamond-Logo">
				                            <path d="M77.685,22.174 L77.214,22.174 L77.214,20 L77.685,20 C78.478,20 78.723,20.244 78.723,21.086 C78.723,21.93 78.478,22.174 77.685,22.174 M77.744,19 L76,19 L76,26.072 L77.214,26.072 L77.214,23.174 L77.744,23.174 C79.243,23.174 79.938,22.596 79.938,21.086 C79.938,19.578 79.243,19 77.744,19" id="Fill-72"></path>
				                            <path d="M82.215,20.842 C82.215,20.313 82.371,20.059 82.861,20.059 C83.351,20.059 83.508,20.313 83.508,20.842 L83.508,24.428 C83.508,24.955 83.351,25.211 82.861,25.211 C82.371,25.211 82.215,24.955 82.215,24.428 L82.215,20.842 Z M82.861,26.268 C84.135,26.268 84.723,25.455 84.723,24.455 L84.723,20.813 C84.723,19.813 84.135,19 82.861,19 C81.588,19 81,19.813 81,20.813 L81,24.455 C81,25.455 81.588,26.268 82.861,26.268 L82.861,26.268 Z" id="Fill-74"></path>
				                            <path d="M88.214,20 L88.646,20 C89.302,20 89.547,20.244 89.547,21.086 C89.547,21.93 89.302,22.174 88.646,22.174 L88.214,22.174 L88.214,20 Z M88.214,23.174 C88.431,23.174 88.686,23.164 88.842,23.145 L89.703,26.072 L90.938,26.072 L89.909,22.869 C90.32,22.684 90.762,22.223 90.762,21.086 C90.762,19.578 90.067,19 88.704,19 L87,19 L87,26.072 L88.214,26.072 L88.214,23.174 Z" id="Fill-76"></path>
				                            <path d="M93.175,26.072 L94.39,26.072 L94.39,20.058 L95.566,20.058 L95.566,19 L92,19 L92,20.058 L93.175,20.058 L93.175,26.072 Z" id="Fill-78"></path>
				                            <path d="M100.125,25.014 L98.215,25.014 L98.215,19 L97,19 L97,26.073 L100.125,26.073 L100.125,25.014 Z" id="Fill-80"></path>
				                            <path d="M104.048,20.41 L104.068,20.41 L104.547,23.447 L103.568,23.447 L104.048,20.41 Z M103.392,24.506 L104.724,24.506 L104.939,26.072 L106.114,26.072 L104.812,19 L103.304,19 L102,26.072 L103.176,26.072 L103.392,24.506 Z" id="Fill-82"></path>
				                            <path d="M108.097,21.654 L108.117,21.654 L109.664,26.072 L110.723,26.072 L110.723,19 L109.625,19 L109.625,23.047 L109.606,23.047 L108.126,19 L107,19 L107,26.072 L108.097,26.072 L108.097,21.654 Z" id="Fill-84"></path>
				                            <path d="M114.214,25.074 L114.214,20 L114.636,20 C115.282,20 115.508,20.244 115.508,20.988 L115.508,24.084 C115.508,24.828 115.282,25.074 114.636,25.074 L114.214,25.074 Z M116.722,23.937 L116.722,21.136 C116.722,19.685 116.056,19 114.802,19 L113,19 L113,26.072 L114.802,26.072 C116.056,26.072 116.722,25.387 116.722,23.937 L116.722,23.937 Z" id="Fill-86"></path>
				                            <path d="M81.508,90.428 C81.508,90.957 81.351,91.211 80.862,91.211 C80.371,91.211 80.215,90.957 80.215,90.428 L80.215,86.842 C80.215,86.315 80.371,86.059 80.862,86.059 C81.351,86.059 81.508,86.315 81.508,86.842 L81.508,90.428 Z M80.862,85 C79.588,85 79,85.815 79,86.813 L79,90.457 C79,91.455 79.588,92.27 80.862,92.27 C82.135,92.27 82.722,91.455 82.722,90.457 L82.722,86.813 C82.722,85.815 82.135,85 80.862,85 L80.862,85 Z" id="Fill-88"></path>
				                            <path d="M86.646,88.176 L86.215,88.176 L86.215,86 L86.646,86 C87.302,86 87.546,86.246 87.546,87.088 C87.546,87.93 87.302,88.176 86.646,88.176 M88.762,87.088 C88.762,85.578 88.066,85 86.705,85 L85,85 L85,92.074 L86.215,92.074 L86.215,89.174 C86.43,89.174 86.685,89.164 86.841,89.145 L87.704,92.074 L88.938,92.074 L87.91,88.871 C88.321,88.684 88.762,88.225 88.762,87.088" id="Fill-90"></path>
				                            <path d="M92.214,88.939 L93.781,88.939 L93.781,87.88 L92.214,87.88 L92.214,86.058 L94.252,86.058 L94.252,85 L91,85 L91,92.074 L94.389,92.074 L94.389,91.015 L92.214,91.015 L92.214,88.939 Z" id="Fill-92"></path>
				                            <path d="M96,86.813 L96,90.458 C96,91.584 96.666,92.27 97.627,92.27 C98.194,92.27 98.488,92.075 98.851,91.643 L99.076,92.172 L99.664,92.172 L99.664,88.586 L97.676,88.586 L97.676,89.547 L98.449,89.547 L98.449,90.231 C98.449,90.938 98.272,91.211 97.783,91.211 C97.362,91.211 97.215,90.918 97.215,90.467 L97.215,86.833 C97.215,86.237 97.46,86.059 97.754,86.059 C98.233,86.059 98.449,86.334 98.449,87.391 L99.605,87.391 L99.605,86.942 C99.605,85.883 98.997,85 97.783,85 C96.588,85 96,85.815 96,86.813" id="Fill-94"></path>
				                            <path d="M104.215,86.842 C104.215,86.315 104.371,86.059 104.861,86.059 C105.352,86.059 105.508,86.315 105.508,86.842 L105.508,90.428 C105.508,90.957 105.352,91.211 104.861,91.211 C104.371,91.211 104.215,90.957 104.215,90.428 L104.215,86.842 Z M104.861,92.27 C106.135,92.27 106.723,91.455 106.723,90.457 L106.723,86.813 C106.723,85.815 106.135,85 104.861,85 C103.588,85 103,85.815 103,86.813 L103,90.457 C103,91.455 103.588,92.27 104.861,92.27 L104.861,92.27 Z" id="Fill-96"></path>
				                            <path d="M110.098,87.656 L110.118,87.656 L111.665,92.074 L112.723,92.074 L112.723,85 L111.626,85 L111.626,89.047 L111.606,89.047 L110.127,85 L109,85 L109,92.074 L110.098,92.074 L110.098,87.656 Z" id="Fill-98"></path>
				                            <path d="M160.608,67.818 L143.729,77.453 L104.976,77.425 L118.11,33.716 L143.771,33.73 L160.713,43.402 L149.394,55.777 L160.608,67.818 Z M110.775,96.263 L80.172,96.263 L55.012,81.588 L93.253,81.588 L91.933,77.691 L95.809,63.611 L99.794,77.695 L98.564,81.623 L136.423,81.623 L110.775,96.263 Z M31.168,67.677 L42.571,55.55 L31.068,43.541 L47.804,33.777 L73.154,33.777 L86.481,77.414 L47.86,77.414 L31.168,67.677 Z M95.877,46.103 L92.795,33.472 L99.164,33.472 L95.877,46.103 Z M77.208,16.627 L95.271,16.627 L113.805,16.627 L136.423,29.537 L111.751,29.537 L113.112,33.453 L102.233,68.798 L97.913,54.308 L103.658,33.443 L102.46,29.537 L89.056,29.537 L87.967,33.447 L93.626,54.308 L89.387,68.802 L78.463,33.447 L79.647,29.586 L54.992,29.586 L77.208,16.627 Z M184.653,51.015 L97.913,1.504 L95.28,0 L92.66,1.529 L7.781,51.041 L0,55.58 L7.781,60.119 L92.66,109.632 L95.28,111.16 L97.913,109.656 L184.653,60.144 L192.65,55.58 L184.653,51.015 Z" id="Fill-100"></path>
				                            <path d="M65.235,65.508 L62.54,68.303 L53.653,68.303 L53.653,58.362 L62.172,58.362 L65.235,61.537 L65.235,65.508 Z M53.653,43.069 L62.514,43.069 L65.212,45.865 L65.212,49.637 L61.688,53.293 L53.653,53.293 L53.653,43.069 Z M70.133,51.647 L70.133,43.774 L64.563,38 L45.004,38 L45.004,43.069 L48.076,43.069 L48.076,68.303 L45,68.303 L45,73.373 L64.555,73.344 L70.151,67.606 L70.155,59.531 L66.425,55.576 L70.133,51.647 Z" id="Fill-102"></path>
				                            <path d="M121,47.4 L121,63.222 C121,69.55 125.234,72.623 129.935,72.623 L145.658,72.64 L145.658,64.961 L142.684,64.961 L141.51,67.302 L130.539,67.33 C128.679,67.33 126.956,65.734 126.956,63.593 L126.956,47.029 C126.956,44.888 128.679,43.382 130.539,43.382 L141.483,43.375 L142.684,45.769 L145.658,45.769 L145.658,38.031 L129.935,38 C125.188,38 121,41.304 121,47.4" id="Fill-104"></path>
				                        </g>
				                    </g>
				                </g>
				            </g>
				        </g>
				    </g>
				</svg>
			</div>
			<div class="page-navigation">
				<h6>Explore</h6>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
			<div class="utility-navigation">
				<h6>Connect</h6>
				<?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
			</div>
			<div class="social-media">
				<h6>Follow Us</h6>
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
	</footer>
	<div class="copyright">
		&copy; <?php the_date('Y'); ?>&nbsp;<?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('description'); ?>
	</div>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-20466765-1', 'auto');
	  ga('send', 'pageview');

	</script>

<?php wp_footer(); ?>

</body>
</html>
