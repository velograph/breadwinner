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

		jQuery('.product-gallery').slick({
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

<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php get_footer( 'shop' ); ?>
