<?php
include 'includes/BlogPost.Class.php';
include 'templates/header.php'; ?>

<h2>Test Parsley's Blog Post Output</h2>

<?php 
    $newPost = new BlogPost();
    $newPost->id = 1;
    $newPost->title = 'Testing Title';
    $newPost->content = 'Testing Content';
    echo $newPost->id;
    echo $newPost->title;
    echo $newPost->content;
?>

 <?php include 'templates/footer.php'; ?>