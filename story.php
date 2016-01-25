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
				<h3><?php the_field('large_copy_section'); ?></h3>
			</div>
		</div>

		<?php if( have_rows('before_breadwinner_sections') ) : ?>

			<div class="double-images">

			    <?php while ( have_rows('before_breadwinner_sections') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'before_section' ) : ?>

						<div class="image-one">
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
								<?php the_sub_field('tony_before_content'); ?>
							</div>

						</div>

						<div class="image-two">
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
								<?php the_sub_field('ira_before_content'); ?>
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

					<div class="large-open-section-container">
						<div class="large-open-section">
							<h3><?php the_sub_field('after_content'); ?></h3>
						</div>
					</div>

		        <?php endif; ?>

		    <?php endwhile; ?>

			<div class="large-open-section-container">
				<div class="large-open-section">
					<svg viewBox="0 0 402 288">
					    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
					        <g id="Desktop" sketch:type="MSArtboardGroup" transform="translate(-499.000000, -5085.000000)" fill="#261B01">
					            <g id="BWC-Logo" sketch:type="MSLayerGroup" transform="translate(499.000000, 5085.000000)">
					                <path d="M292.572121,279.611828 C291.682319,279.611828 290.982342,278.84772 290.982342,275.726413 C290.982342,272.605106 291.682319,271.840999 292.572121,271.840999 C293.442941,271.840999 294.15241,272.605106 294.15241,275.726413 C294.15241,278.84772 293.442941,279.611828 292.572121,279.611828 M292.572121,271 C291.029798,271 290,272.299944 290,275.726413 C290,279.152883 291.029798,280.452827 292.572121,280.452827 C294.102581,280.452827 295.134752,279.152883 295.134752,275.726413 C295.134752,272.299944 294.102581,271 292.572121,271" id="Fill-42" sketch:type="MSShapeGroup"></path>
					                <path d="M305.84367,275.027183 L304.987087,275.027183 L304.987087,271.840999 L305.84367,271.840999 C307.248371,271.840999 307.701577,272.398461 307.701577,273.431688 C307.701577,274.469721 307.248371,275.027183 305.84367,275.027183 M308.688664,273.383631 C308.688664,271.869833 307.651748,271 306.194845,271 L304,271 L304,280.20293 L304.987087,280.20293 L304.987087,275.894613 L306.270775,275.844153 L307.730051,280.20293 L308.759848,280.20293 L307.224643,275.637508 C308.235458,275.279483 308.688664,274.416858 308.688664,273.383631" id="Fill-44" sketch:type="MSShapeGroup"></path>
					                <path d="M318.977596,275.815319 L321.321928,275.815319 L321.321928,274.97432 L318.977596,274.97432 L318.977596,271.840999 L322.147664,271.840999 L322.147664,271 L318,271 L318,280.20293 L322.299524,280.20293 L322.299524,279.359528 L318.977596,279.359528 L318.977596,275.815319 Z" id="Fill-46" sketch:type="MSShapeGroup"></path>
					                <path d="M80.014512,275.204994 L78.9775959,275.204994 L78.9775959,271.840999 L80.014512,271.840999 C80.9968536,271.840999 81.5734454,272.379238 81.5734454,273.525399 C81.5734454,274.669158 80.9968536,275.204994 80.014512,275.204994 M80.1378979,271 L78,271 L78,280.20293 L78.9775959,280.20293 L78.9775959,276.045993 L80.1378979,276.045993 C81.5971734,276.045993 82.5534141,275.053614 82.5534141,273.525399 C82.5534141,271.994781 81.5971734,271 80.1378979,271" id="Fill-48" sketch:type="MSShapeGroup"></path>
					                <path d="M91.51385,279.359528 L90.9847144,279.359528 L90.9847144,271.840999 L91.51385,271.840999 C92.9493975,271.840999 93.7751338,272.451324 93.7751338,275.601465 C93.7751338,278.749203 92.9493975,279.359528 91.51385,279.359528 M91.6918105,271 L90,271 L90,280.205333 L91.6918105,280.205333 C93.6042918,280.205333 94.762221,279.128854 94.762221,275.601465 C94.762221,272.071673 93.6042918,271 91.6918105,271" id="Fill-50" sketch:type="MSShapeGroup"></path>
					                <path d="M108.859506,271 L107.803608,271 L106.517547,274.260673 L105.136574,271 L104.07593,271 L105.96231,275.308317 L104,280.20293 L105.058271,280.20293 L106.517547,276.351155 L108.178511,280.20293 L109.234409,280.20293 L107.070411,275.308317 L108.859506,271 Z" id="Fill-52" sketch:type="MSShapeGroup"></path>
					                <path d="M133.410272,261 C128.999226,261 126,263.561442 126,266.92784 L126,281.085455 C126,285.783034 130.01716,287.155063 133.500439,287.155063 C137.562682,287.155063 140.728005,284.372559 140.728005,281.193583 L140.728005,279.6077 L136.176964,279.6077 L136.176964,280.871601 C136.176964,282.892401 134.570574,283.471489 133.322478,283.471489 C131.265256,283.471489 130.555787,282.315716 130.555787,280.837961 L130.555787,267.682336 C130.555787,265.952282 131.092041,264.688381 133.362816,264.688381 C135.102083,264.688381 136.176964,265.913836 136.176964,267.357951 L136.176964,268.588212 L140.728005,268.588212 L140.728005,267.144097 C140.728005,263.561442 137.605393,261 133.410272,261" id="Fill-54" sketch:type="MSShapeGroup"></path>
					                <path d="M160.563456,271.216934 L160.473289,271.216934 L156.814423,261 L152,261 L158.245225,275.840025 L158.245225,286.717744 L162.79152,286.717744 L162.79152,275.840025 L169.039118,261 L164.219949,261 L160.563456,271.216934 Z" id="Fill-56" sketch:type="MSShapeGroup"></path>
					                <path d="M187.403154,261 C182.987362,261 180,263.561442 180,266.92784 L180,281.085455 C180,285.783034 184.012414,287.155063 187.49332,287.155063 C191.553191,287.155063 194.718514,284.372559 194.718514,281.193583 L194.718514,279.6077 L190.1651,279.6077 L190.1651,280.871601 C190.1651,282.892401 188.563456,283.471489 187.312987,283.471489 C185.262883,283.471489 184.546296,282.315716 184.546296,280.837961 L184.546296,267.682336 C184.546296,265.952282 185.080177,264.688381 187.355698,264.688381 C189.097337,264.688381 190.1651,265.913836 190.1651,267.357951 L190.1651,268.588212 L194.718514,268.588212 L194.718514,267.144097 C194.718514,263.561442 191.598274,261 187.403154,261" id="Fill-58" sketch:type="MSShapeGroup"></path>
					                <path d="M210.551041,261 L206,261 L206,286.717744 L219.56533,286.717744 L219.56533,283.034169 L210.551041,283.034169 L210.551041,261 Z" id="Fill-60" sketch:type="MSShapeGroup"></path>
					                <path d="M233,286.717744 L246.560584,286.717744 L246.560584,283.034169 L237.551041,283.034169 L237.551041,275.482 L245.402655,275.482 L245.402655,272.014682 L237.551041,272.014682 L237.551041,264.467318 L246.560584,264.467318 L246.560584,261 L233,261 L233,286.717744 Z" id="Fill-62" sketch:type="MSShapeGroup"></path>
					                <path d="M267.036693,261 C261.809402,261 259.223044,264.145336 259.223044,268.045167 C259.223044,271.262588 260.248096,273.357877 264.177462,274.657821 L267.435324,275.741508 C269.658643,276.464767 270.06202,276.894878 270.06202,279.64134 C270.06202,281.991331 269.841349,283.471489 266.759075,283.471489 C264.445589,283.471489 263.551041,282.17635 263.551041,280.837961 L263.551041,279.672577 L259,279.672577 L259,281.049412 C259,284.51673 262.345656,287.155063 266.759075,287.155063 C272.648378,287.155063 274.617807,283.940045 274.617807,279.6077 C274.617807,275.849636 273.858509,273.787988 269.841349,272.564935 L266.365189,271.437997 C263.997129,270.681098 263.778831,269.996285 263.778831,268.006722 C263.778831,266.31271 264.35305,264.688381 266.851614,264.688381 C269.172218,264.688381 270.06202,266.096453 270.06202,267.79527 L270.06202,268.621852 L274.617807,268.621852 L274.617807,266.819712 C274.617807,263.960316 271.578243,261 267.036693,261" id="Fill-64" sketch:type="MSShapeGroup"></path>
					                <path d="M187.919092,17.5840839 L216.032094,17.5840839 L201.520014,74.0367305 L187.919092,17.5840839 Z M400.541464,0 L271.574729,0 L277.582673,17.5047898 L229.573696,175.463591 L210.508202,110.704279 L235.859258,17.4567327 L230.570274,0 L171.418601,0 L166.61367,17.4711498 L191.589822,110.699473 L172.882622,175.482814 L124.671956,17.4759555 L129.899247,0.213853986 L0,0.213853986 L0,18.9537106 L101.2405,18.9537106 L160.052862,213.969323 L0.666758398,213.969323 L0.583710199,232.615468 L189.945468,232.615468 L184.117857,215.199584 L201.223413,152.280858 L218.803531,215.223613 L213.38167,232.77646 L400.380113,232.77646 L400.515363,214.149537 L241.67975,214.012574 L299.640275,18.6821881 L400.541464,18.7470652 L400.541464,0 Z" id="Fill-66" sketch:type="MSShapeGroup"></path>
					                <path d="M345.842279,69.9076435 L385.814563,69.8740036 L390.194763,78.7309226 L401.062213,78.7309226 L401.062213,50.1177398 L343.630824,50 C326.299851,50 311,62.2209143 311,84.7668913 L311,143.278784 C311,166.682579 326.470693,178.040869 343.630824,178.040869 L401.062213,178.110552 L401.062213,149.70882 L390.194763,149.70882 L385.907103,158.366302 L345.842279,158.469625 C339.048936,158.469625 332.753883,152.570619 332.753883,144.653216 L332.753883,83.3852504 C332.753883,75.4678472 339.048936,69.9076435 345.842279,69.9076435" id="Fill-68" sketch:type="MSShapeGroup"></path>
					                <path d="M31.5986533,125.305437 L62.7156271,125.305437 L73.9034059,137.052989 L73.9034059,151.736829 L64.0610079,162.071503 L31.5986533,162.071503 L31.5986533,125.305437 Z M31.5986533,68.749468 L63.9660957,68.749468 L73.8156121,79.0937535 L73.8132393,93.0399168 L60.945514,106.551164 L31.5986533,106.551164 L31.5986533,68.749468 Z M0,162.071503 L0,180.820971 L71.4167055,180.712843 L91.8560537,159.495644 L91.8702905,129.628171 L78.2480131,114.999597 L91.7919879,100.464735 L91.7919879,71.3493558 L71.4451792,50 L0.0118640284,50 L0.0118640284,68.749468 L11.2328621,68.749468 L11.2328621,162.071503 L0,162.071503 Z" id="Fill-70" sketch:type="MSShapeGroup"></path>
					            </g>
					        </g>
					    </g>
					</svg>
				</div>
			</div>

			<div class="large-button">

				<a href="/product-category/bikes/" class="button">Design your custom Breadwinner</a>

			</div>

		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
