<?php

class BlogPost 
{
    public $title = '';
    public $content = '';

    //Create a constructor 

    function __construct($title = false, $content = false) {
        if(is_string($title)){
            $this->title = $title;
        }
        if(is_string($content)){
            $this->content = $content;
        }
    }


}
