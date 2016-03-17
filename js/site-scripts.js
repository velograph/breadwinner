jQuery(document).ready(function(){

	jQuery(function() {
		jQuery('.utility-navigation .search-form').hide('slow');
		jQuery(".toggle_right_pane").toggle(function() {
			jQuery('.utility-navigation .search-form').show('fade');
			jQuery( '.utility-navigation .search-form input' ).focus();
		}, function() {
			jQuery('.utility-navigation .search-form').hide('fade');
		});
	});


	jQuery(".mobile-menu-trigger").click(function(){
		jQuery(".slide-out").slideToggle(700);
	});


	jQuery('.scroll-for-content').click(function() {
	    jQuery('html,body').animate({
	        scrollTop: jQuery('.scroll-for-content').next().offset().top},
	        2000);
	});

	$first_price = jQuery('.composite_price .amount').html();
	jQuery('.current-price h1').append($first_price);

	jQuery('.composite_wrap').bind('DOMNodeInserted DOMNodeRemoved', function(event) {
		if (event.type == 'DOMNodeInserted') {
			jQuery('.current-price h1').empty();

			$price = jQuery('.composite_price .amount').html();
			jQuery('.current-price h1').append($price);

			jQuery('.current-configuration .frame span').empty();
			$frame_selection = jQuery('.composite_data .summary_element:nth-child(1) .content_bundle_title').html();
			jQuery('.current-configuration .frame span').append($frame_selection);

			jQuery('.current-configuration .paint span').empty();
			$paint_selection = jQuery('.composite_data .summary_element:nth-child(2) .content_product_meta').html();
			$chopped = $paint_selection.substring(7, $paint_selection.length); // Removes "Color: "
			jQuery('.current-configuration .paint span').append($chopped);

			jQuery('.current-configuration .drivetrain span').empty();
			$drivetrain_selection = jQuery('.composite_data .summary_element:nth-child(3) .content_product_title').html();
			jQuery('.current-configuration .drivetrain span').append($drivetrain_selection);

			jQuery('.current-configuration .cockpit span').empty();
			$cockpit_selection = jQuery('.composite_data .summary_element:nth-child(4) .content_product_title').html();
			jQuery('.current-configuration .cockpit span').append($cockpit_selection);

			jQuery('.current-configuration .wheelset span').empty();
			$wheelset_selection = jQuery('.composite_data .summary_element:nth-child(5) .content_product_title').html();
			jQuery('.current-configuration .wheelset span').append($wheelset_selection);
		}
	});

	jQuery('.bundled_table_item a').removeAttr("href");


});
