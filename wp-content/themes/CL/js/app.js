jQuery(document).ready(function($){

	$(document).foundation();

	$('.home-carousel').owlCarousel({
	    stopOnHover : true,
	    navigation:true,
	    singleItem : true,
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

	$('#appartements-accordion').on('toggled',function (event, tab){
		$('html,body').animate({ scrollTop: $('#'+tab[0]['id']).offset().top}, 800);
		return false;
	});

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

	$('ul.tabs li a').on('click',function(e){
		e.preventDefault();
		$('ul.tabs li a').parent().removeClass('active');
		$(this).parent().addClass('active');

		if($(this).attr("href") == '#plan'){
			$('#map').show();
			$('#subway').hide();
		}else{
			$('#map').hide();
			$('#subway').show();
		}
	})

});

