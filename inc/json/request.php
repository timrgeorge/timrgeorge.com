<?php
    
  /* ********************************************************************** */
  /*                                                                        */
  /* JSON Request page - handles all of our AJAX calls                      */
  /*                                                                        */
  /* ********************************************************************** */
  
  // Load functions file
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_functions.php');


  // Set content-type to return JSON
  header('Content-Type: application/json');


  // Detect if we were passed the request parameter
  if(isset($_POST['request'])) { $request = $_POST['request']; }
  else if(isset($_GET['request'])) { $request = $_GET['request']; }
  else { $request = null; }


  // Switch on our request parameter
  switch($request) {

    case 'get_slogan': 
        $returnJSON = get_slogan();
      break;

    case 'get_hover_photo':
        $returnJSON = get_hover_photo();
      break;

    case null:                    
        $returnJSON = "{'status': false }";
      break;
    
    default:
        $returnJSON = "{'status': false }";
      break;
  
  }


  // Write out our encoded JSON
  echo json_encode( $returnJSON );


?>