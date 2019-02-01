<!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset=utf-8>
 	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,600,700,800" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="dist/app.css">
 	<title>php-boolpress</title>
 </head>
 <body>

  <?php include 'boolpressEngine.php'; ?>
  
  <!-- main_container - start -->
  <div id="main_container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="posts.php">BoolPress</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="posts.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <?php
          if (getThePageName() === 'posts.php') {
              include 'templateParts/tp_navbarTagsDropdown.php';
            }
            ?>
          <li class="nav-item">
            <a class="nav-link" href="bp-admin.php">Admin Panel</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- page_content - start -->
    <div id="page_content">
