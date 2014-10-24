<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php'); ?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- ************************************************************** -->
<!-- Hey, thanks for checking out my source code and seeing what    -->
<!-- I'm all about. If you like what you see, please feel free to   -->
<!-- get in touch with me at: tim@timrgeorge.com                    -->
<!--                                                                -->
<!-- Thanks again for coming by!                                    -->
<!-- For your efforts, please enjoy the following:                  -->
<!-- https://www.youtube.com/watch?v=AZKpByV5764                    -->
<!-- or                                                             -->
<!-- https://www.youtube.com/watch?v=3Sso3h0xMJA                    -->
<!-- ************************************************************** -->

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Tim George - UI/UX &amp; Web Developer</title>
<meta name="author" content="Tim George" />
<meta name="description" content="Tim often enjoys coding to Stan Bush's 'The Touch'." />

<meta name="google-site-verification" content="jjAew9bmyHsT_U5BIFoSsjSd01R96zaSarkJjZJB894" />

<meta name="Copyright" content="<?php echo date('Y')?> - Tim George" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/style.css" />

<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/libs/modernizr-2.8.3.min.js"></script>

</head>

<body>

<div class="nav-wrapper">
<nav class="main-nav clearfix">
<a href="index"><h2>Tim George</h2></a>
<a class="mobile-menu-btn" href="hamburger">Menu Icon</a>
<ul>
<li><a href="index">Home</a></li>
<li><a href="work">Work</a></li>
<li><a href="about">About</a></li>
</ul>
</nav>
</div>

<header>
<article class="wrapper">
<div class="title-photo clearfix">
<a class="main-title" href="/">
<h1>Hi Friends</h1>
<h2>I'm Tim George<br />User Interface&nbsp;&nbsp;&amp;&nbsp;&nbsp;Web Developer.<br />80's Enthusiast.&nbsp;&nbsp;Lego-Builder.</h2>
<h3><?php get_slogan(); ?></h3>
</a>

<div class="main-photo">
<!-- ************************************************************** -->
<!-- Yes, it's a photo of me, and when you hover over it            -->
<!-- you are treated to an amazing animated gif. ENJOY YOUR REWARD. -->
<!-- ************************************************************** -->
<?php get_hover_photo(); ?>

</div>
</div>

<div class="intro">
<p>I'm<span class="mobile-hidden"> Tim George,</span> a Boston-based User Interface &amp; Web Developer, who is currently employed as the Managing UI/UX Architect at <a href="http://bostonfinancial.com">Boston Financial Data Services</a>.</p>
</div>

<footer class="clearfix">
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/social.php'); ?>

</footer>
</header>
