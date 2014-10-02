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

		$(".main-nav a").click(function(e){
			e.preventDefault();
			var theTarget = $(this).attr("href");
			if( !($(this).hasClass("mobile-menu-btn")) ) {
				if(theTarget == "index") { 	$('html, body').animate({ scrollTop: "0px" }, 500); } 
				else { $('html, body').animate({ scrollTop: $("#"+theTarget).offset().top-71 }, 500);}
			} else {
				//console.log("hamburger");
			}

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