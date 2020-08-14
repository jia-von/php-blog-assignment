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
<h2>List of Post</h2> <!--Array was created to list blog post-->
    <?php 
        $blogList = array(
            (new BlogPost (2, 'title1', 'content1')),
            (new BlogPost (3, 'title2', 'content2')),
            (new BlogPost (4, 'title3', 'content3')),
            (new BlogPost (5, 'title4', 'content4')),
        );

        foreach ($blogList as $blog) : ?>
            <li>
                <h3>
                    <?php echo "Blog id: {$blog->id}. Title: {$blog->title}" ; ?>
                </h3>
                    <p><?php $blog->content ?></p>
            </li>
        <?php endforeach;?>
 <?php include 'templates/footer.php'; ?>