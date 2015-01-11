/**
 *	jQuery Scripts
 */
jQuery(document).ready(function($) {

	/* Masonry */
	var $container = $('.gallery');

	$container.imagesLoaded( function(){
		$container.masonry({
			itemSelector : 'dl.gallery-item'
		});
	});

	/* Responsive Menu */
	$('.openresponsivemenu').click(function() {
		$('.navigation-menu').toggleClass("responsivemenu cf");
	});

});

/**
 *	Limit Menu
 */
var full_width = 0;

jQuery("nav ul:first > li").each(function( index ) {
	if((jQuery(this).width() + full_width) > 900) {
		jQuery(this).remove();
	}
	full_width = full_width + jQuery(this).width();
});