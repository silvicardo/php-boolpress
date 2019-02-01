<?php

include '../database/data-comments.php';
include '../boolpressEngine.php';

$pageSlug = $_GET['slug'];

$outputComments = getCommentsPerPostWith($pageSlug, $comments);

echo json_encode($outputComments);

 ?>
