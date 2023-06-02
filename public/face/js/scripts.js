(function($){
	$(document).ready(function() {	

		// Scroll to Top
		jQuery('.scrolltotop').click(function(){
			jQuery('html').animate({'scrollTop' : '0px'}, 400);
			return false;
		});
		
		jQuery(window).scroll(function(){
			var upto = jQuery(window).scrollTop();
			if(upto > 500) {
				jQuery('.scrolltotop').fadeIn();
			} else {
				jQuery('.scrolltotop').fadeOut();
			}
		});


	
		$("#owl-csel1").owlCarousel({
			items: 1,
			autoplay: false,
			autoplayTimeout: 3000,
			rtl: false,
			loop: true,
			margin: 15,
			dots: true,
			nav: false,
			// center:true,
			// stagePadding: 2,
			navText: [
						'<i class="fa fa-angle-left" aria-hidden="true"></i>',
						'<i class="fa fa-angle-right" aria-hidden="true"></i>'
					],
			navContainer: '.main-content .custom-nav',
			responsive:{
				0: {
					items: 1,						
				},
				767: {
					items: 1,						
				},
				1200: {
					items: 1,						
				}
			}

		});
				
		
		jQuery('.tabs .tab-links a').on('click', function(e)  {
			var currentAttrValue = jQuery(this).attr('href'); 
			// Show/Hide Tabs
			// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).siblings().hide();
		jQuery('.tabs ' + currentAttrValue).delay().show();             
			// Change/remove current tab to active
			jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
			e.preventDefault();
		});
		
		
		
		
		
		
	});
})(jQuery);