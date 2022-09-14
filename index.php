<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/templates/header.php'); ?>
  

<header class="main-header">
<div class="wrapper">
<section class="title-and-photo clearfix">
<a itemscope itemtype="http://schema.org/Person" class="main-title" href="/">
<link itemprop="url" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/" />
<h1>Hi Friends</h1>
<h2>
I'm <span itemprop="name">Tim George</span><br />
<span itemprop="jobTitle">User Interface <span class="ampersand">&amp;</span> Web Developer</span>.<br />
80's Enthusiast.&nbsp;&nbsp;Lego-Builder.
</h2>
<h3><?= get_slogan(); ?></h3>
</a>
<div class="main-photo">
<!-- ************************************************************** -->
<!-- Yes, it's a photo of me, and when you hover over it            -->
<!-- you are treated to an amazing animated gif. ENJOY YOUR REWARD. -->
<!-- ************************************************************** -->
<?= get_hover_photo(); ?>

</div>
</section>

<div class="intro">
<p>I'm<span class="mobile-hidden"> Tim George,</span> a Boston-based User Interface &amp; Web Developer, who is employed as a Software Engineer at <a href="http://www.simplisafe.com/">SimpliSafe</a>, a proud father of two amazing daughters, and am currently in the process of moving my entire life from Massachusetts to New Hampshire.</p>
</div>

<footer class="clearfix">
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/templates/social.php'); ?>

</footer>
</div>
</header>

<section id="about" class="about content clearfix">
<div class="wrapper">
<h2>About</h2>
<div class="about-text">
<p>If you're currently looking to work with me, or want more detailed information about my background, please see my <a href="http://resume.timrgeorge.com/">Resume</a>, as I usually keep it up to date.</p>
<p>Currently, I am employed by <a href="http://www.simplisafe.com/">SimpliSafe</a> as a Software Engineer. My position, in addition to my previous ones as a Senior Web Developer at <a href="http://www.eatonvance.com">Eaton Vance</a> and as the Managing UX/UI Architect at <a href="http://bostonfinancial.com">Boston Financial Data Services</a>, provide me with plenty of challenging opportunites to help design and develop simple-to-use interfaces for complex financial web applications.</p>
<p>As for the fun stuff, I have an unhealthy obsession with <em>scrobbling</em> my music listening habits on <a href="http://www.last.fm/">Last.fm</a>. I also enjoy watching 80&#8217;s movies and tv shows, playing the saxophone, building Legos, playing video games, or just hanging out with my friends around the Greater Boston area.</p>
</div>
<div class="about-photo"></div>
</div>
</section>

<section id="music" class="music content clearfix">
<div class="wrapper">
<h2>Currently Listening To</h2>
<p><?php echo getLastFMTrack(); ?></p>
</div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/templates/footer.php'); ?>