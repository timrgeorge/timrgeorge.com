<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_functions.php'); ?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- ************************************************************************ -->
<!-- Hey, thanks for checking out my source code and seeing what I'm all      -->
<!-- about. If you like what you see, please feel free to get in touch with   -->
<!-- me at: tim@timrgeorge.com                                                -->
<!--                                                                          -->
<!-- Thanks again for coming by! - For your efforts, enjoy the following:     -->
<!-- https://www.youtube.com/watch?v=AZKpByV5764                              -->
<!-- or                                                                       -->
<!-- https://www.youtube.com/watch?v=3Sso3h0xMJA                              -->
<!--                                                                          -->
<!-- Background Image:    http://subtlepatterns.com/                          -->
<!-- Google Fonts:        https://www.google.com/fonts/specimen/Titillium+Web -->
<!-- Animated GIFs via:   http://giphy.com/                                   -->
<!-- Initial Templates:   https://github.com/murtaugh/HTML5-Reset             -->
<!--                                                                          -->
<!-- Colors from Aspirin-C theme via Kuler:                                   -->
<!-- https://color.adobe.com/Aspirin-C-color-theme-251864/                    -->
<!-- ************************************************************************ -->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tim George - UI &amp; Web Developer</title>
<meta name="author" content="Tim George" />
<meta name="description" content="User Interface &amp; Web Developer. 80's Enthusiast. Lego-Builder. Tim often enjoys coding to Stan Bush's 'The Touch'." />
<meta name="google-site-verification" content="jjAew9bmyHsT_U5BIFoSsjSd01R96zaSarkJjZJB894" />
<meta name="Copyright" content="<?php echo date('Y')?> - Tim George" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/img/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/style.css?d=<?php echo time(); ?>" />
<script src="/assets/js/libs/modernizr-3.3.1.min.js"></script>
<script src="/assets/js/libs/require.js" data-main="/assets/js/loader/functions"></script>
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@timrgeorge">
<meta name="twitter:title" content="Tim George - UI &amp; Web Developer">
<meta name="twitter:description" content="User Interface &amp; Web Developer. 80's Enthusiast. Lego-Builder. Tim often enjoys coding to Stan Bush's 'The Touch'.">
<meta name="twitter:url" content="http://timrgeorge.com">
<meta name="twitter:image" content="http://timrgeorge.com/assets/img/facebook_og.jpg" />
<meta property="og:title" content="Tim George - UI &amp; Web Developer" />
<meta property="og:description" content="User Interface &amp; Web Developer. 80's Enthusiast. Lego-Builder. Tim often enjoys coding to Stan Bush's 'The Touch'." />
<meta property="og:url" content="http://timrgeorge.com" />
<meta property="og:image" content="http://timrgeorge.com/assets/img/facebook_og.jpg" />
</head>

<body>
  
<div class="nav-container">
<nav class="wrapper clearfix">
<?php if ($_SERVER['REQUEST_URI'] == "/") { ?><a href="index"><?php } else { ?><a class="home" href="/index"><?php } ?><h2>Tim George</h2></a>
<a class="mobile-menu-btn" href="hamburger">Menu Icon</a>
<ul class="main-navigation">
<?php if ($_SERVER['REQUEST_URI'] == "/") { ?>
<li><a href="index">Home</a></li>
<li><a href="about">About</a></li>
<li><a href="music">Music</a></li>
<?php } else { ?>
<li class="back-home"><a href="/index">&laquo; Home</a></li>
<?php } ?>
<li class="resume"><a class="resume" href="http://resume.timrgeorge.com">Resume</a></li>
</ul>
</nav>
</div>