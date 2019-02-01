
<?php $allTags = getBlogTags($posts); ?>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="posts.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tags
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <?php foreach ($allTags as $tag) { ?>
    <a class="dropdown-item" href="posts.php?tag=<?php echo $tag; ?>"><?php echo $tag; ?></a>
    <?php } ?>
  </div>
</li>
