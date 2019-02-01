

<?php

$desiredSlug = $_GET['slug'];

$post = getPostWithSlug($desiredSlug, $posts);

?>

<div class="post_detail container mb-5" data-slug="<?php echo $post['slug']; ?>">

  <h1 class="title"><?php echo theTitle($post); ?></h1>

  <h3 class="date">Pubblicato il <?php echo theDate($post); ?></h3>

  <div class="row my-5">
    <div class="col-md-5 mb-5">
      <img class="img-fluid" src="<?php echo theThumbnail($post); ?>" alt="">
    </div>
    <div class="col-md-7 d-flex flex-column justify-content-center">
      <p class="content"><?php echo theContent($post); ?></p>
    </div>
  </div>

  <h6 class="tags"><span class="text-danger">Tag: </span> <?php echo theTags($post); ?></h6>

</div>
