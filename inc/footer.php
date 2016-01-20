<?php if ($_SERVER['REQUEST_URI'] == "/") { ?>
<section id="music" class="music content clearfix">
<h2>Currently Listening To</h2>
<p><?php echo getLastFM(); ?></p>

</section>
<?php } ?>
<?php if($_SERVER['SCRIPT_NAME'] != "/404.php") { ?>
<footer class="bottom clearfix">
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/social.php'); ?>
<p>&copy; <?php echo date("Y"); ?> Tim George</p>
</footer>
<?php } ?>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/libs/jquery-1.11.0.min.js'>\x3C/script>")</script>
<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/functions.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-709645-11', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>