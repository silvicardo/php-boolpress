<?php

include 'data-comments.php';
include 'functions.php';

$pageSlug = $_GET['slug'];

$outputComments = getInstanceWithKeyOf($comments, $pageSlug);

echo json_encode($outputComments);

 ?>
