


  <?php $chosenTag = $_GET['tag']; ?>
  <?php if (!empty($chosenTag)){
    $filteredPostsByTag = getPostsWithTag($chosenTag, $posts);
    if (!empty($filteredPostsByTag)) {
      $posts = $filteredPostsByTag;
    } else { ?>
      <h1>Your tag is not valid, showing all posts</h1>
    <?php }
  } ?>
  <!-- POSTS/POSTS FILTERED BY TAG POSTS AREA -->
  <div class="posts container">
    <?php foreach ($posts as $post) { ?>
      <div class="post jumbotron bg-light">
        <a href="<?php echo 'post-detail.php?slug=' . $post['slug']; ?>">
          <h3 class="title"><?php echo theTitle($post); ?> - <span class="date">Pubblicato il <?php echo theDate($post); ?></span></h3>
        </a>
        <p class="excerpt mt-4"><?php echo theExcerpt($post); ?></p>
      </div>
    <?php  } ?>
  </div>
