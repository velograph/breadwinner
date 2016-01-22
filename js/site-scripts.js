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
			// alert('Content added! Current content:' + '\n\n' + this.innerHTML);
		} else {
			// alert('Content removed! Current content:' + '\n\n' + this.innerHTML);
		}
	});

});

jQuery(window).load(function(){
	jQuery('.composite_wrap .composite_price').hide();
});
