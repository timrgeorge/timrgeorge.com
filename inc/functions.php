<?php
  
  date_default_timezone_set('America/New_York');

  function getLastFM() {
    $lastfmrequest = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&limit=1&user=timrgeorge&api_key=03fd6a5efdecd80ff180234e98bb2c59&format=json';
    $lastfminput = file_get_contents($lastfmrequest);
    $var = json_decode($lastfminput,true);
    $tracks = $var['recenttracks']['track'];
    date_default_timezone_set('America/New_York');
    //if ($var['recenttracks']['track'][1]['url'] != "" ) { 
    //if ( is_array($var['recenttracks']['track']) ) { 
    if(isset($var['recenttracks']['track'][1]['url'])) {
      $txt = '<a href="http://' . $var['recenttracks']['track'][1]['url'] . '">' . $var['recenttracks']['track'][1]['artist']['#text'] . ' - ' . $var['recenttracks']['track'][1]['name'] . '</a><br />on ' . date('l, F jS \a\t g:i a',$var['recenttracks']['track'][1]['date']['uts']);  
      // . $var[0]->artist . ' - ' . $var[0]->name; 
    } else { 
      $txt = '<a href="http://' . $var['recenttracks']['track']['url'] . '">' . $var['recenttracks']['track']['artist']['#text'] . ' - ' . $var['recenttracks']['track']['name'] . '</a><br />on ' . date('l, F jS \a\t g:i a',$var['recenttracks']['track']['date']['uts']); 
      // . $var[0]->artist . ' - ' . $var[0]->name; 
    }
    
    return ($txt);

  } 
  
  function get_slogan() {       
    $num = rand() % (77 - 1 + 1) + 1;    
    switch($num) {

      case 1: echo "Asps... very dangerous. You go first.";break;
      case 2: echo "Oh, my friends! I'm so pleased you're not dead!";break;
      case 3: echo "We have top men working on it right now.";break;
      case 4: echo "They're digging in the wrong place!";break;
      case 5: echo "I don't know, I'm makin' this up as I go.";break;
      case 6: echo "Ah, dessert! Chilled monkey brains.";break;
      case 7: echo "I'm very little! You cheat very big!";break;
      case 8: echo "Fortune and glory, kid. Fortune and glory.";break;
      case 9: echo "That's FIVE camels; can't you count?";break;
      case 10: echo "Fly, yes. Land, no.";break;
      case 11: echo "This is intolerable!";break;
      case 12: echo "Whoa, Doc. This is heavy.";break;
      case 13: echo "Roads? Where we're going, we don't need roads.";break;
      case 14: echo "Great Scott!";break;
      case 15: echo "What's a rerun?";break;
      case 16: echo "Hey, you! Get your damn hands off her!";break;
      case 17: echo "What the hell is a gigawatt?";break;
      case 18: echo "Okay. Time circuit's on. Flux capacitor, fluxing.";break;
      case 19: echo "Crazy drunk pedestrians!";break;
      case 20: echo "Never tell me the odds.";break;
      case 21: echo "Who's scruffy-looking?";break;
      case 22: echo "Laugh it up, fuzzball.";break;
      case 23: echo "That's two you owe me junior.";break;
      case 24: echo "Kirk? You're still alive, my old friend?";break;
      case 25: echo "I don't believe in the no-win scenario.";break;
      case 26: echo "Come with me if you want to live.";break;
      case 27: echo "Want a Twinkie, Genghis Khan?";break;
      case 28: echo "Negative, Ghost Rider, the pattern is full.";break;
      case 29: echo "Talk to me, Goose.";break;
      case 30: echo "Sorry, Goose, but it's time to buzz a tower.";break;
      case 31: echo "Too close for missles, I'm switching to guns.";break;
      case 32: echo "Don't cross the streams.";break;
      case 33: echo "Back off, man. I'm a scientist.";break;
      case 34: echo "That's a big Twinkie.";break;
      case 35: echo "We came, we saw, we kicked its ass!";break;
      case 36: echo "Listen... do you smell something?";break;
      case 37: echo "Go get her, Ray!";break;
      case 38: echo "Welcome to the party, pal.";break;
      case 39: echo "You macho assholes, no, no!";break;
      case 40: echo "Happy trails, Hans.";break;
      case 41: echo "Hey, sprechen ze talk?";break;
      case 42: echo "*Shoot* the glass!";break;
      case 43: echo "Get to the Chopper!";break;
      case 44: echo "If it bleeds, we can kill it.";break;
      case 45: echo "I ain't got time to bleed.";break;
      case 46: echo "Killian, here's your Subzero, now plain zero.";break;
      case 47: echo "We're on a mission from God.";break;
      case 48: echo "No, ma'am. We're musicians.";break;
      case 49: echo "The light was yellow, sir.";break;
      case 50: echo "They broke my watch!";break;
      case 51: echo "I bet these cops got SCMODS.";break;
      case 52: echo "Did you get me my Cheez Wiz, boy?";break;
      case 53: echo "Hannibal's on the jazz.";break;
      case 54: echo "I ain't gettin' on no plane!";break;
      case 55: echo "I pity the fool.";break;
      case 56: echo "I got no time for the jibba-jabba.";break;
      case 57: echo "K.I.T.T., I need ya buddy!";break;
      case 58: echo "Keep your scanners peeled.";break;
      case 59: echo "We're in the pipe, five by five.";break;
      case 60: echo "That's it, man. Game over, man! Game over!";break;
      case 61: echo "I'd buy that for a dollar!";break;
      case 62: echo "Dead or alive, you're coming with me!";break;
      case 63: echo "Your move, creep.";break;
      case 64: echo "Call me 'Snake'";break;
      case 65: echo "The name's Plissken!";break;
      case 66: echo "I have come here to chew bubblegum and kick ass.";break;
      case 67: echo "Mama don't like tattletales.";break;
      case 68: echo "Put the glasses on! Put 'em on!";break;
      case 69: echo "Wouldn't you prefer a nice game of chess?";break;
      case 70: echo "Wolverines!";break;
      case 71: echo "There can be only one!";break;
      case 72: echo "Say hello to my little friend!";break;
      case 73: echo "Goonies never say die!";break;
      case 74: echo "That's right, I'm Abe Froman.";break;
      case 75: echo "They've gone to plaid!";break;
      case 76: echo "LUDICROUS SPEED! *GO!*";break;
      case 77: echo "Yippie ki-yay.";break;
      default: echo "Yippie ki-yay.";break;
    } 

  }

  function get_hover_photo() {
    $num = rand() % (9 - 1 + 1) + 1;    
    switch($num) {
      case 1: echo '<div class="hover-photo knight-rider">One man can make a difference.</div>';break;
      case 2: echo '<div class="hover-photo mr-t">I pity the shark!</div>';break;
      case 3: echo '<div class="hover-photo bttf">We don\'t need roads.</div>';break;
      case 4: echo '<div class="hover-photo terminator-2">I know now why you cry.</div>';break;
      case 5: echo '<div class="hover-photo ghostbusters">Bustin\' makes me feel good.</div>';break;
      case 6: echo '<div class="hover-photo predator">Dylan! You son of a bitch.</div>';break;
      case 7: echo '<div class="hover-photo top-gun">I feel the need. The need, for speed.</div>';break;
      case 8: echo '<div class="hover-photo indiana-jones">Give me the whip!</div>';break;
      case 9: echo '<div class="hover-photo die-hard">Let\'s see you take *this* under advisement, jerkweed!</div>';break;
      default: echo '<div class="hover-photo knight-rider">One man can make a difference.</div>';break;
    }
  }

?>