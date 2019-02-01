


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
  <div class="posts">
    <?php foreach ($posts as $post) { ?>
      <div class="post">
        <a href="<?php echo 'post-detail.php?slug=' . $post['slug']; ?>">
          <h1><?php echo theTitle($post); ?> - <span>Pubblicato il <?php echo theDate($post); ?></span></h1>
        </a>
        <p><?php echo theExcerpt($post); ?></p>
      </div>
    <?php  } ?>
  </div>
