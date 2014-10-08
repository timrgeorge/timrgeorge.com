(function($){

	$(document).ready(function (){
		// Main navigation event listener
		$(".main-nav a").click(function(e){
			e.preventDefault();
			var theTarget = $(this).attr("href");
			if( !($(this).hasClass("mobile-menu-btn")) ) {
				var mobileVisible = $(".mobile-menu-btn").is(':visible') ? true : false;
				if(mobileVisible) { $('.main-nav ul').toggle().toggleClass("active"); var offset = -10; }
				else { var offset = 50; }
				if(theTarget == "index") { 	$('html, body').animate({ scrollTop: "0px" }, 500); } 
				else { $('html, body').animate({ scrollTop: $("#"+theTarget).offset().top-offset }, 500);}
			} else {
				$('.main-nav ul').toggle().toggleClass("active");
			}
		});
		// Work item event listeners
		$(".work-item a").click(function(e){
			e.preventDefault();
			var displayTempMsg = $("#temp-message").is(':visible') ? false : true;
			if(displayTempMsg) {
 				$("#temp-message").slideToggle();
				$('html, body').animate({ scrollTop: $("#temp-message").offset().top-90 }, 500);
			}
		});
		// Event listener for scenario where mobile menu is displayed but user clicks
		// outside of menu area
		$('.wrapper').click(function() {
			if($(".mobile-menu-btn").is(':visible') && $('.main-nav ul').hasClass('active') ) {
				$('.main-nav ul').toggle().toggleClass("active");
			}
		});	
	});

	$(window).resize(function() {
		// Reset inline styles added by jQuery if window is resized
		if($(this).width() > 640) {
			$('.main-nav ul').removeAttr("style").removeAttr("class");
		}
	});

})(window.jQuery);