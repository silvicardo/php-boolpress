

<?php

$desiredSlug = $_GET['slug'];

$post = getPostWithSlug($desiredSlug, $posts);

?>

<div class="post_detail" data-slug="<?php echo $post['slug']; ?>">

  <h1><?php echo theTitle($post); ?> -  <span>Pubblicato il <?php echo theDate($post); ?></span></h1>

  <img src="<?php echo theThumbnail($post); ?>" alt="">

  <p><?php echo theContent($post); ?></p>

  <h6><p>Tag: <?php echo theTags($post); ?></p></h6>

</div>

<a href="posts.php">Torna alla Home</a>
