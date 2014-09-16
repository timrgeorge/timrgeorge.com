<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php'); ?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Tim George - UI/UX &amp; Web Developer</title>
  <meta name="author" content="Tim George" />
  <meta name="description" content="Tim often enjoys coding to Stan Bush's 'The Touch'." />

  <meta name="google-site-verification" content="" />

  <meta name="Copyright" content="<?php echo date('Y')?> - Tim George" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/favicon.ico" />
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/style.css" />

  <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/libs/modernizr-2.8.3.min.js"></script>

</head>

<body>

  <nav class="main-nav clearfix">
    <a class="mobile-menu-btn" href="hamburger">Menu Icon</a>
    <ul>
      <li><a href="index">Home</a></li>
      <li><a href="work">Work</a></li>
      <li><a href="about">About</a></li>
      <li><a href="blog">Blog</a></li>
    </ul>
  </nav>

  <div class="wrapper">
    
    <header class="primary clearfix">
    
        <a class="main-title" href="/">
          <h1>Tim George</h1>
          <h2>User Interface Designer.&nbsp;&nbsp;Web Developer.<br />80's Enthusiast.&nbsp;&nbsp;Lego-Builder.</h2>
          <h3><?php get_slogan(); ?></h3>
        </a>

        <div class="main-photo">
          <!-- <div class="lazer-photo"></div> -->
        </div>

    </header>

    <header class="secondary clearfix">

      <a class="sub-title" href="/">
        <h1>Tim George</h1>
        <h2>User Interface Designer.&nbsp;&nbsp;Web Developer.<br />80's Enthusiast.&nbsp;&nbsp;Lego-Builder.</h2>
      </a>    

    </header>