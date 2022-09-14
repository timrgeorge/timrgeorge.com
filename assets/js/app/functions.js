define([
  'jquery'
], function () {


  /**
   *  AJAX for slogan bit, will go and grab a new one
   *
   **/
  $(".main-title").click(function(e){
    e.preventDefault();

    $.ajax({
      url:      '/inc/json/request.php',
      type:     'POST',
      dataType: 'json',
      data: { 
        request:  'get_slogan',
      },
      success:  function(data) {
        $(".main-title").find("h3").text(data);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(thrownError);
        console.log(xhr.responseText);
      }
    });

  });



  /**
   *  AJAX for hover photo, will go and grab a new one
   *
   **/
  $(".main-photo").click(function(e){
    
    $.ajax({
      url:      '/inc/json/request.php',
      type:     'POST',
      dataType: 'json',
      data: { 
        request:  'get_hover_photo',
      },
      success:  function(data) {
        $(".main-photo").html(data);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(thrownError);
        console.log(xhr.responseText);
      }
    });

  });



  /**
   *  Main navigation event listener
   *
   **/
  $(".main-navigation a").click(function(e){
    if(!$(this).hasClass("resume")) {
      e.preventDefault();
      scrollToSection($(this));
    }
  });



  /**
   *  Event listener for mobile menu button
   *
   **/
  $(".mobile-menu-btn").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.main-navigation').toggle().toggleClass("active");
    $('.custom-overlay').toggle();
  });



  /** 
   *  Event listener for scenario where mobile menu is 
   *  displayed but user clicks outside of menu area
   *
   **/
  $('.custom-overlay').click(function() {
    $('.main-navigation').toggle().toggleClass("active");
    $('.custom-overlay').toggle();
    
  });



  /**
   *  Reset inline styles added by jQuery if window is resized
   *
   **/
  $(window).resize(function() {    
    if($(this).width() > 640) {
      $('.main-navigation').removeAttr("style").removeClass("active");
      $('.custom-overlay').removeAttr("style");
    }
  });



  /**
   *  Function for scrolling to a certain section of the page
   *
   *  @param object   anchor              the html anchor object element that was clicked
   *
   **/
  function scrollToSection(anchor) {
    var theTarget = anchor.attr("href");
    var mobileVisible = $(".mobile-menu-btn").is(':visible') ? true : false;
    
    if(mobileVisible) { 
      $('.main-navigation').toggle().toggleClass("active");
      $('.custom-overlay').toggle();
    }

    if(theTarget == "index") {  $('html, body').animate({ scrollTop: "0px" }, 500); } 
    else if (theTarget == "/index") {
     if(anchor.hasClass("home")) { window.location.href = "/"; }
     else { window.location.href = "/#work"; }
    }
    else { $('html, body').animate({ scrollTop: $("#"+theTarget).offset().top }, 500);}
  };


});