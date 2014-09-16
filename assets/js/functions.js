// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){

	/* trigger when page is ready */
	$(document).ready(function (){
	
		$(".mobile-menu-btn").click(function(e){
			e.preventDefault();
			//$("body").toggleClass("show-menu");
		});

		$(".main-nav ul li a").click(function(e){
			e.preventDefault();
		});

		/*$(".main-photo").click(function(){
			$("body").toggleClass("lazer");
		});*/
	
	});
	
	
	/* optional triggers
	
	$(window).load(function() {
		
	});
	
	$(window).resize(function() {
		
	});
	
	*/

})(window.jQuery);