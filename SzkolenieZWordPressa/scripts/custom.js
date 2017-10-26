jQuery(document).ready(function($) {

	$(document).on('click', '.menu-toggle', function(event) {
		event.preventDefault();
		$('.top').find('.menu').slideToggle(200);
	});

	$(document).on('click', '.menu .search a', function(event) {
		$('.top .menu .search form').toggle();
		$('.top .menu .search form')[0].reset();
	});

});