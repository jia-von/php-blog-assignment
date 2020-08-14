<?php
include 'includes/blog-api.php';
include 'includes/BlogPostFromApi.Class.php';
include 'templates/header.php'; ?>

<?php $blogs = retrieveArticles(); ?>
    <ul>
        <?php foreach($blogs as $blog) : ?>
        <?php $currentBlog = new BlogPostFromApi; ?>
        <?php $currentBlog->output();?>
        <?php endforeach; ?>
    </ul>
 <?php include 'templates/footer.php'; ?>
 