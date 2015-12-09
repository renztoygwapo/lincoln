jQuery(document).ready(function($){

	$(document).foundation();

	$('.home-carousel').owlCarousel({
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

	$('#appartements-accordion .accordion-navigation').each(function(){
		$(this).removeClass('active');
	});
	
	$('#appartements-accordion .accordion-navigation').first().addClass('active');

	$(window).scroll(function() {
        var scroll = $(window).scrollTop();
 
        if (scroll >= 128) {
            $("body > header").addClass('smaller');
        } else {
            $("body > header").removeClass("smaller");
        }
    });

	$('a[href^="#contact"]').click(function(){
		$('html,body').animate({ scrollTop: $(this.hash).offset().top}, 800);
		return false;
	});

});

