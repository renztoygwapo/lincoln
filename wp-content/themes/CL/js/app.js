jQuery(document).ready(function($){

	$(document).foundation();

	$('.home-carousel').owlCarousel({
	    autoPlay : 3000,
	    stopOnHover : true,
	    navigation:true,
	    singleItem : true,
	    autoHeight : true,
	    navigationText : ''
	});

	$('.accordion-carousel').owlCarousel({
	    stopOnHover : true,
	    navigation:true,
	    singleItem : true,
	    autoHeight : true,
	    navigationText : ''
	});

});



