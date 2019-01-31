<!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset=utf-8>
 	<link rel="stylesheet" href="dist/app.css">
 	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 	<title>php-boolpress</title>
 </head>
 <body>
  <?php
  include 'data.php';
  //include 'functions.php';
  ?>
  <div id="main_container">

    <div class="posts">
      <?php foreach ($posts as $post) { ?>
      <div class="post">
        <a href="<?php echo 'post-detail.php?slug=' . $post['slug']; ?>">
          <h1><?php echo $post['title']; ?> - <span>Pubblicato il <?php echo $post['published_at']; ?></span></h1>
        </a>

        <p><?php
        //per ora in linea, la funzione non va... da capire
        $putSpecialAtLength = chunk_split( $post['content'], 150, '*cutHere*');
        $excerpt = explode('*cutHere*', $putSpecialAtLength)[0];
        echo $excerpt . '...';
        ?></p>
      </div>
      <?php  } ?>
    </div>

  </div>

 	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 </body>
 </html>
