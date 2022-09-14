<?php
  
  /* ********************************************************************** */
  /*                                                                        */
  /* TIMRGEORGE.COM FUNCTIONS                                               */
  /*                                                                        */
  /* ********************************************************************** */


  // Set default Timezone
  date_default_timezone_set('America/New_York');



  /**
   *  Returns a random slogan
   *
   **/
  function get_slogan() {       
    $num = rand() % (77 - 1 + 1) + 1;    
    switch($num) {

      case 1:   $slogan = "Asps... very dangerous. You go first.";              break;
      case 2:   $slogan = "Oh, my friends! I'm so pleased you're not dead!";    break;
      case 3:   $slogan = "We have top men working on it right now.";           break;
      case 4:   $slogan = "They're digging in the wrong place!";                break;
      case 5:   $slogan = "I don't know, I'm makin' this up as I go.";          break;
      case 6:   $slogan = "Ah, dessert! Chilled monkey brains.";                break;
      case 7:   $slogan = "I'm very little! You cheat very big!";               break;
      case 8:   $slogan = "Fortune and glory, kid. Fortune and glory.";         break;
      case 9:   $slogan = "That's FIVE camels; can't you count?";               break;
      case 10:  $slogan = "Fly, yes. Land, no.";                                break;
      case 11:  $slogan = "This is intolerable!";                               break;
      case 12:  $slogan = "Whoa, Doc. This is heavy.";                          break;
      case 13:  $slogan = "Roads? Where we're going, we don't need roads.";     break;
      case 14:  $slogan = "Great Scott!";                                       break;
      case 15:  $slogan = "What's a rerun?";                                    break;
      case 16:  $slogan = "Hey, you! Get your damn hands off her!";             break;
      case 17:  $slogan = "What the hell is a gigawatt?";                       break;
      case 18:  $slogan = "Okay. Time circuit's on. Flux capacitor, fluxing.";  break;
      case 19:  $slogan = "Crazy drunk pedestrians!";                           break;
      case 20:  $slogan = "Never tell me the odds.";                            break;
      case 21:  $slogan = "Who's scruffy-looking?";                             break;
      case 22:  $slogan = "Laugh it up, fuzzball.";                             break;
      case 23:  $slogan = "That's two you owe me junior.";                      break;
      case 24:  $slogan = "Kirk? You're still alive, my old friend?";           break;
      case 25:  $slogan = "I don't believe in the no-win scenario.";            break;
      case 26:  $slogan = "Come with me if you want to live.";                  break;
      case 27:  $slogan = "Want a Twinkie, Genghis Khan?";                      break;
      case 28:  $slogan = "Negative, Ghost Rider, the pattern is full.";        break;
      case 29:  $slogan = "Talk to me, Goose.";                                 break;
      case 30:  $slogan = "Sorry, Goose, but it's time to buzz the tower.";       break;
      case 31:  $slogan = "Too close for missles, I'm switching to guns.";      break;
      case 32:  $slogan = "Don't cross the streams.";                           break;
      case 33:  $slogan = "Back off, man. I'm a scientist.";                    break;
      case 34:  $slogan = "That's a big Twinkie.";                              break;
      case 35:  $slogan = "We came, we saw, we kicked its ass!";                break;
      case 36:  $slogan = "Listen... do you smell something?";                  break;
      case 37:  $slogan = "Go get her, Ray!";                                   break;
      case 38:  $slogan = "Welcome to the party, pal.";                         break;
      case 39:  $slogan = "You macho assholes, no, no!";                        break;
      case 40:  $slogan = "Happy trails, Hans.";                                break;
      case 41:  $slogan = "Hey, sprechen ze talk?";                             break;
      case 42:  $slogan = "*Shoot* the glass!";                                 break;
      case 43:  $slogan = "Get to the Chopper!";                                break;
      case 44:  $slogan = "If it bleeds, we can kill it.";                      break;
      case 45:  $slogan = "I ain't got time to bleed.";                         break;
      case 46:  $slogan = "Killian, here's your Subzero, now plain zero.";      break;
      case 47:  $slogan = "We're on a mission from God.";                       break;
      case 48:  $slogan = "No, ma'am. We're musicians.";                        break;
      case 49:  $slogan = "The light was yellow, sir.";                         break;
      case 50:  $slogan = "They broke my watch!";                               break;
      case 51:  $slogan = "I bet these cops got SCMODS.";                       break;
      case 52:  $slogan = "Did you get me my Cheez Wiz, boy?";                  break;
      case 53:  $slogan = "Hannibal's on the jazz.";                            break;
      case 54:  $slogan = "I ain't gettin' on no plane!";                       break;
      case 55:  $slogan = "I pity the fool.";                                   break;
      case 56:  $slogan = "I got no time for the jibba-jabba.";                 break;
      case 57:  $slogan = "K.I.T.T., I need ya buddy!";                         break;
      case 58:  $slogan = "Keep your scanners peeled.";                         break;
      case 59:  $slogan = "We're in the pipe, five by five.";                   break;
      case 60:  $slogan = "That's it, man. Game over, man! Game over!";         break;
      case 61:  $slogan = "I'd buy that for a dollar!";                         break;
      case 62:  $slogan = "Dead or alive, you're coming with me!";              break;
      case 63:  $slogan = "Your move, creep.";                                  break;
      case 64:  $slogan = "Call me 'Snake'";                                    break;
      case 65:  $slogan = "The name's Plissken!";                               break;
      case 66:  $slogan = "I have come here to chew bubblegum and kick ass.";   break;
      case 67:  $slogan = "Mama don't like tattletales.";                       break;
      case 68:  $slogan = "Put the glasses on! Put 'em on!";                    break;
      case 69:  $slogan = "Wouldn't you prefer a nice game of chess?";          break;
      case 70:  $slogan = "Wolverines!";                                        break;
      case 71:  $slogan = "There can be only one!";                             break;
      case 72:  $slogan = "Say hello to my little friend!";                     break;
      case 73:  $slogan = "Goonies never say die!";                             break;
      case 74:  $slogan = "That's right, I'm Abe Froman.";                      break;
      case 75:  $slogan = "They've gone to plaid!";                             break;
      case 76:  $slogan = "LUDICROUS SPEED! *GO!*";                             break;
      case 77:  $slogan = "Yippie ki-yay.";                                     break;
      default:  $slogan = "Yippie ki-yay.";                                     break;
    } 

    return '"'.$slogan.'"';

  }



  /**
   *  Echos out a random class and text ( the photo is associated
   *  to the class in the SASS/CSS file )
   *
   **/
  function get_hover_photo() {
    $num = rand() % (9 - 1 + 1) + 1;    
    switch($num) {
      case 1:   $hover_photo = '<div title="One man can make a difference." class="hover-photo knight-rider">One man can make a difference.</div>';                      break;
      case 2:   $hover_photo = '<div title="I pity the shark!" class="hover-photo mr-t">I pity the shark!</div>';                                           break;
      case 3:   $hover_photo = '<div title="We don\'t need roads." class="hover-photo bttf">We don\'t need roads.</div>';                                       break;
      case 4:   $hover_photo = '<div title="I know now why you cry." class="hover-photo terminator-2">I know now why you cry.</div>';                             break;
      case 5:   $hover_photo = '<div title="Bustin\' makes me feel good." class="hover-photo ghostbusters">Bustin\' makes me feel good.</div>';                        break;
      case 6:   $hover_photo = '<div title="Dylan! You son of a bitch." class="hover-photo predator">Dylan! You son of a bitch.</div>';                              break;
      case 7:   $hover_photo = '<div title="I feel the need. The need, for speed." class="hover-photo top-gun">I feel the need. The need, for speed.</div>';                    break;
      case 8:   $hover_photo = '<div title="Give me the whip!" class="hover-photo indiana-jones">Give me the whip!</div>';                                  break;
      case 9:   $hover_photo = '<div title="Let\'s see you take *this* under advisement, jerkweed!" class="hover-photo die-hard">Let\'s see you take *this* under advisement, jerkweed!</div>';  break;
      default:  $hover_photo = '<div title="One man can make a difference." class="hover-photo knight-rider">One man can make a difference.</div>';                      break;
    }

    return $hover_photo;
  }



  /**
   *  Returns HTML of the lastest Last.fm track that I scrobbled
   *
   **/
  function getLastFMTrack() {
    $lastfmrequest = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&limit=1&user=doctor_viper&api_key=03fd6a5efdecd80ff180234e98bb2c59&format=json';
    $lastfminput = file_get_contents($lastfmrequest);
    $var = json_decode($lastfminput,true);
    $tracks = $var['recenttracks']['track'];
    if(isset($var['recenttracks']['track'][1]['url'])) {
      $txt = '<a href="' . $var['recenttracks']['track'][1]['url'] . '">' . $var['recenttracks']['track'][1]['artist']['#text'] . ' - ' . $var['recenttracks']['track'][1]['name'] . '</a><br />on ' . date('l, F jS \a\t g:i a',$var['recenttracks']['track'][1]['date']['uts']);  
    } else { 
      $txt = '<a href="' . $var['recenttracks']['track'][0]['url'] . '">' . $var['recenttracks']['track'][0]['artist']['#text'] . ' - ' . $var['recenttracks']['track'][0]['name'] . '</a><br />on ' . date('l, F jS \a\t g:i a',$var['recenttracks']['track'][0]['date']['uts']); 
    }    
    return ($txt);
  } 


?>