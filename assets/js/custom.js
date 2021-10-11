(function($){

$(document).ready(function(){

	// banner-carousel
	$('.banner-area').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		autoplayTimeout:4000
	});
	// works-carousel
	$('.works-items').owlCarousel({
		items:3,
		loop:true,
		dots:false,
		nav:true,
		margin:30,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:3
			}
		}

	});
	
	// latest-carousel
	$('.latest-caro').owlCarousel({
		items:1,
		loop:true,
		dots:false,
		nav:true
	});
	// testimonials-carousel
	$('.testimonial-area').owlCarousel({
		items:1,
		loop:true,
		dots:true
	});
	// 7no page portfoliomasnory-carousel
	

	
	// work-popup
	$('.work-popup').magnificPopup({
		 type: 'image',
		 gallery:{
		    enabled:true
 		 }
	})
	// aspieprogesss
	$('.pie_progress').asPieProgress({
        namespace: 'pie_progress'
      });
	 $('.pie_progress').asPieProgress('start');

	 // back to top
	 $('.btn-style-2').click(function(){
	 	$('html,body').animate({
	 		scrollTop:0
	 	},2000);
	 	return false
	 })


	 // responsive code
	 $('.logo a i').click(function(){
	 	$('.menu ul').slideToggle(1000);
	 })

	  $('.short-search-icon').click(function(){
	 	$('.short-search-icon-show').slideToggle(1000);
	 	return false;
	 })

	  // 5no page mixitup filter
	  
	  var mixer = mixitup('.mixiup-area',{
	  	animation: {
	        applyPerspective: true,
	        queue: true,
	        effects: 'fade translateZ(-100px)'
	    }
	  });
	 
});



$(document).ready(function(){
	$('.get').owlCarousel({
		items:1,
		loop:true,
		dots:false,
		nav:true
	});
	 // portfoliomasonry-blog
	var mixer = mixitup('.portfoliomasonry-blog');
})

})(jQuery);