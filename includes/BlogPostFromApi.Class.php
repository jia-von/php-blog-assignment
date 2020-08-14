<?php
include_once 'BlogPost.Class.php';

class BlogPostFromApi extends BlogPost {
    
    public function output(){
        ?>

        <h2><?php echo $this->title; ?></h2>
        <p><?php echo $this->content; ?></p>
    
        <?php
    }
}