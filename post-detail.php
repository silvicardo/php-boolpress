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
   
  <?php include 'boolpressEngine.php'; ?>

  <div id="main_container">

    <?php include 'templateParts/tp_singlePost.php'; ?>

    <?php include 'templateParts/tp_singlePostComments.php'; ?>

  </div>

 	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
 	<script src="dist/app.js" charset="utf-8"></script>
 </body>
 </html>
