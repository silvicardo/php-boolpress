
<!--  -->
<?php $allTags = getBlogTags($posts); ?>

<form action="posts.php">
  <select name="tag">
  <?php foreach ($allTags as $tag) { ?>
    <option value="<?php echo $tag; ?>"><?php echo $tag; ?></option>
  <?php } ?>
  </select>
  <input type="submit">
</form>
