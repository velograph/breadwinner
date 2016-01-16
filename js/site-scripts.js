jQuery(document).ready(function(){

	jQuery(function() {
		jQuery('.search-form').hide('slow');
		jQuery(".toggle_right_pane").toggle(function() {
			jQuery('.search-form').show('fade');
		}, function() {
			jQuery('.search-form').hide('fade');
		});
	});

	jQuery(".mobile-menu-trigger").click(function(){
		jQuery(".slide-out").slideToggle(700);
	});


});
