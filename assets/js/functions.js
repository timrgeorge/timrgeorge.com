(function($){

	/* trigger when page is ready */
	$(document).ready(function (){
	
		$(".main-nav a").click(function(e){
			e.preventDefault();
			var theTarget = $(this).attr("href");
			if( !($(this).hasClass("mobile-menu-btn")) ) {
				if(theTarget == "index") { 	$('html, body').animate({ scrollTop: "0px" }, 500); } 
				else { $('html, body').animate({ scrollTop: $("#"+theTarget).offset().top-50 }, 500);}
			} else {
				//console.log("hamburger");
			}

		});
	
	});

})(window.jQuery);