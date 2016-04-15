jQuery(document).ready(function(){

	// Search form
	jQuery(function() {
		jQuery('.utility-navigation .search-form').hide('slow');
		jQuery(".toggle_right_pane").toggle(function() {
			jQuery('.utility-navigation .search-form').show('fade');
			jQuery( '.utility-navigation .search-form input' ).focus();
		}, function() {
			jQuery('.utility-navigation .search-form').hide('fade');
		});
	});

	// Mobile Menu Trigger
	jQuery(".mobile-menu-trigger").click(function(){
		jQuery(".slide-out").slideToggle(700);
	});

	// Scroll to content
	jQuery('.scroll-for-content').click(function() {
	    jQuery('html,body').animate({
	        scrollTop: jQuery('.scroll-for-content').next().offset().top},
	        2000);
	});

});

jQuery(window).load(function(){

	// First off, let's get the frame chosen on page load and put that into the current configuration box
	if ( jQuery('.product .component .component_options_select').text().length > 0 ) {
		// Get multiple frame option title on load
		multiple_frame_options = jQuery('.product .first .component_options_select option:selected').attr('data-title');
		// alert(multiple_frame_options);
		jQuery('.current-configuration .frame span').append(multiple_frame_options);
		jQuery('[data-item_id="review"] .first .summary_element_selection .summary_element_content:first-child').html(multiple_frame_options);
	} else {
		// Get Single option Frame
		single_option_frame = jQuery('.first .component_options_select option').attr('data-title');
		// alert(single_option_frame);
		jQuery('.current-configuration .frame span').append(single_option_frame);
		jQuery('[data-item_id="review"] .first .summary_element_selection .summary_element_content:first-child').html(single_option_frame);
	}

	// Next let's get the paint loaded in.
	paint_on_load = jQuery('[data-nav_title="Paint"] .component_data select option:selected').html();
	jQuery('.current-configuration .paint span').html(paint_on_load);

	// And then remove the href so that the swatch can't be clicked on
	jQuery('.composited_product_images a').removeAttr("href");

	// Drivetrain, Cockpit, and Wheelset are not loaded. Rather they are populated initially with &mdash;

	// Now we set up the triggers. When a select is changed we grab the new content and replace it in the configuration block
	jQuery('[data-nav_title="Frame"] .component_options select').on('change', function() {
		frame_from_select = jQuery('[data-nav_title="Frame"] .component_options select option:selected').attr('data-title');
		jQuery('.current-configuration .frame span').html(frame_from_select);
	});

	jQuery('[data-nav_title="Paint"] .component_data select').on('change', function() {
		paint_from_select = jQuery('[data-nav_title="Paint"] .component_data select option:selected').html();
		jQuery('.current-configuration .paint span').html(paint_from_select);
	});

	jQuery('[data-nav_title="Drivetrain"] .component_options select').on('change', function() {
		drivetrain_from_select = jQuery('[data-nav_title="Drivetrain"] .component_options select option:selected').html();
		jQuery('.current-configuration .drivetrain span').html(drivetrain_from_select);
	});

	jQuery('[data-nav_title="Cockpit"] .component_options select').on('change', function() {
		cockpit_from_select = jQuery('[data-nav_title="Cockpit"] .component_options select option:selected').html();
		jQuery('.current-configuration .cockpit span').html(cockpit_from_select);
	});

	jQuery('[data-nav_title="Wheelset"] .component_options select').on('change', function() {
		wheelset_from_select = jQuery('[data-nav_title="Wheelset"] .component_options select option:selected').html();
		jQuery('.current-configuration .wheelset span').html(wheelset_from_select);
	});

});

// Now that the page is loaded we can start watching for changes and update the configuration accordingly
jQuery(document).ready(function(){
	// current_paint = jQuery('.product .component:nth-child(2) .component_data select option:selected').text();
	// alert(current_paint);

	// Watch for changes
	jQuery('.composite_wrap').bind('DOMNodeInserted DOMNodeRemoved', function(event) {
		if (event.type == 'DOMNodeInserted') {

			// Whatever is in this div, empty it
			jQuery('.current-price h1').empty();
			// Get the new total
			$price = jQuery('.composite_price .amount').html();
			// Enter it into the div
			jQuery('.current-price h1').append($price);


		}
	});

});
