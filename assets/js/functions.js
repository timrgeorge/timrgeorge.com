(function($){

  var lastSelected = "";

  $(document).ready(function (){

    $("header article,.main-content").show();

    // Main navigation event listener
    $(".main-nav a").click(function(e){
      if(!$(this).hasClass("resume")) {
        e.preventDefault();
        scrollToSection($(this));
      }
    });
    // Main title link event listener
    $(".main-title").click(function(e){
      e.preventDefault();
      $(this).find("h3").html(getRandomMessage());
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


  scrollToSection = function(anchor) {
    var theTarget = anchor.attr("href");
    if( !(anchor.hasClass("mobile-menu-btn")) ) {
      var mobileVisible = $(".mobile-menu-btn").is(':visible') ? true : false;
      if(mobileVisible) { $('.main-nav ul').toggle().toggleClass("active"); }
      if(theTarget == "index") {  $('html, body').animate({ scrollTop: "0px" }, 500); } 
      else if (theTarget == "/index") {
       if(anchor.hasClass("home")) { window.location.href = "/"; }
       else { window.location.href = "/#work"; }
      }
      else { $('html, body').animate({ scrollTop: $("#"+theTarget).offset().top }, 500);}
    } else {
      $('.main-nav ul').toggle().toggleClass("active");
    }
  };


  getRandomMessage = function() {

    var messageNum = Math.floor(Math.random()*(77-1+1)+1);
    var message;

    switch(messageNum) {  
      case 1: message = "Asps... very dangerous. You go first."; break;
      case 2: message = "Oh, my friends! I'm so pleased you're not dead!"; break;
      case 3: message = "We have top men working on it right now."; break;
      case 4: message = "They're digging in the wrong place!"; break;
      case 5: message = "I don't know, I'm makin' this up as I go."; break;
      case 6: message = "Ah, dessert! Chilled monkey brains."; break;
      case 7: message = "I'm very little! You cheat very big!"; break;
      case 8: message = "Fortune and glory, kid. Fortune and glory."; break;
      case 9: message = "That's FIVE camels; can't you count?"; break;
      case 10: message = "Fly, yes. Land, no."; break;
      case 11: message = "This is intolerable!"; break;
      case 12: message = "Whoa, Doc. This is heavy."; break;
      case 13: message = "Roads? Where we're going, we don't need roads."; break;
      case 14: message = "Great Scott!"; break;
      case 15: message = "What's a rerun?"; break;
      case 16: message = "Hey, you! Get your damn hands off her!"; break;
      case 17: message = "What the hell is a gigawatt?"; break;
      case 18: message = "Okay. Time circuit's on. Flux capacitor, fluxing."; break;
      case 19: message = "Crazy drunk pedestrians!"; break;
      case 20: message = "Never tell me the odds."; break;
      case 21: message = "Who's scruffy-looking?"; break;
      case 22: message = "Laugh it up, fuzzball."; break;
      case 23: message = "That's two you owe me junior."; break;
      case 24: message = "Kirk? You're still alive, my old friend?"; break;
      case 25: message = "I don't believe in the no-win scenario."; break;
      case 26: message = "Come with me if you want to live."; break;
      case 27: message = "Want a Twinkie, Genghis Khan?"; break;
      case 28: message = "Negative, Ghost Rider, the pattern is full."; break;
      case 29: message = "Talk to me, Goose."; break;
      case 30: message = "Sorry, Goose, but it's time to buzz a tower."; break;
      case 31: message = "Too close for missles, I'm switching to guns."; break;
      case 32: message = "Don't cross the streams."; break;
      case 33: message = "Back off, man. I'm a scientist."; break;
      case 34: message = "That's a big Twinkie."; break;
      case 35: message = "We came, we saw, we kicked its ass!"; break;
      case 36: message = "Listen... do you smell something?"; break;
      case 37: message = "Go get her, Ray!"; break;
      case 38: message = "Welcome to the party, pal."; break;
      case 39: message = "You macho assholes, no, no!"; break;
      case 40: message = "Happy trails, Hans."; break;
      case 41: message = "Hey, sprechen ze talk?"; break;
      case 42: message = "*Shoot* the glass!"; break;
      case 43: message = "Get to the Chopper!"; break;
      case 44: message = "If it bleeds, we can kill it."; break;
      case 45: message = "I ain't got time to bleed."; break;
      case 46: message = "Killian, here's your Subzero, now plain zero."; break;
      case 47: message = "We're on a mission from God."; break;
      case 48: message = "No, ma'am. We're musicians."; break;
      case 49: message = "The light was yellow, sir."; break;
      case 50: message = "They broke my watch!"; break;
      case 51: message = "I bet these cops got SCMODS."; break;
      case 52: message = "Did you get me my Cheez Wiz, boy?"; break;
      case 53: message = "Hannibal's on the jazz."; break;
      case 54: message = "I ain't gettin' on no plane!"; break;
      case 55: message = "I pity the fool."; break;
      case 56: message = "I got no time for the jibba-jabba."; break;
      case 57: message = "K.I.T.T., I need ya buddy!"; break;
      case 58: message = "Keep your scanners peeled."; break;
      case 59: message = "We're in the pipe, five by five."; break;
      case 60: message = "That's it, man. Game over, man! Game over!"; break;
      case 61: message = "I'd buy that for a dollar!"; break;
      case 62: message = "Dead or alive, you're coming with me!"; break;
      case 63: message = "Your move, creep."; break;
      case 64: message = "Call me 'Snake'"; break;
      case 65: message = "The name's Plissken!"; break;
      case 66: message = "I have come here to chew bubblegum and kick ass."; break;
      case 67: message = "Mama don't like tattletales."; break;
      case 68: message = "Put the glasses on! Put 'em on!"; break;
      case 69: message = "Wouldn't you prefer a nice game of chess?"; break;
      case 70: message = "Wolverines!"; break;
      case 71: message = "There can be only one!"; break;
      case 72: message = "Say hello to my little friend!"; break;
      case 73: message = "Goonies never say die!"; break;
      case 74: message = "That's right, I'm Abe Froman."; break;
      case 75: message = "They've gone to plaid!"; break;
      case 76: message = "LUDICROUS SPEED! *GO!*"; break;
      case 77: message = "Yippie ki-yay."; break;
      default: message = "Yippie ki-yay."; break;
    }

    return message;
  };

})(window.jQuery);