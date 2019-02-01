<?php
include 'database/data.php';
include 'functions.php';

//query functions

function getPostWithSlug($slug, $posts) {
  return getInstanceWithValueOf($posts, $slug);
}

function getCommentsPerPostWith($slug, $allComments) {
  return getInstanceWithKeyOf($allComments, $slug);

}

function getBlogTags($posts){
  return extractAllValuesAtKeyWithoutDuplicates($posts, 'tag');
}

function getPostsWithTag($tag, $posts) {
  return getAllInstancesWithValueAtKey($posts, 'tag' ,$tag);
}

//single post functions

function theDate($post, $format = 'd F \a\l\l\e G' ) {
  return convertAndFormat($post['published_at'], 'd/m/Y H:i:s',$format);
}

function theTitle($post) {
  return $post['title'];
}

function theThumbnail($post){
  return $post['image'];
}

function theContent($post) {
  return $post['content'];
}

function theExcerpt($post) {
  return  getTheExcerpt($post['content'], 150, '...');
}

function theTags($post) {
  return implode(',', $post['tag']);
}


?>
