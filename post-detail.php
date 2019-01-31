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
  include 'functions.php';

  $desiredSlug = $_GET['slug'];

  $post = getInstanceWithValueOf($posts, $desiredSlug);

  $dateString = convertAndFormat($post['published_at'], 'd/m/Y H:i:s','d F \a\l\l\e G');

  ?>
  <div id="main_container">

    <div class="post_detail" data-slug="<?php echo $post['slug']; ?>">

      <h1><?php echo $post['title']; ?> -  <span>Pubblicato il <?php echo $dateString; ?></span></h1>


      <img src="<?php echo $post['image']; ?>" alt="">

      <p><?php echo $post['content'] ?></p>

      <h6><p>Tag: <?php echo  implode(',', $post['tag'] ); ?></p></h6>

    </div>

    <a href="posts.php">Torna alla Home</a>

  </div>

  <div class="post_comments">
    <script id="post_template" type="text/x-handlebars-template">

        <h1>{{ commentName }} <span> - {{ commentMail }}</span></h1>
        <p>{{ commentBody}}</p>

      </div>
    </script>
  </div>

 	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
 	<script src="dist/app.js" charset="utf-8"></script>
 </body>
 </html>
