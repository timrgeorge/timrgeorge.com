<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/templates/header.php'); ?>


<header class="main-header">

  <div class="wrapper">

    <section class="title-and-photo error clearfix">

      <a class="main-title" href="/">
        <h1>It's a trap!</h1>
        <h2>Sorry, but the page you're<br />looking for doesn't exist!</h2>
        <h3><?= get_slogan(); ?></h3>
      </a>
      <p>Head back to <a href="/">safety</a>!</p>

    </section>

  </div>

</header>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/templates/footer.php'); ?>