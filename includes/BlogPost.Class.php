<?php

class BlogPost 
{
    public $id = 1;
    public $title = 'Default title.';
    public $content = 'Default content.';

    //Create a constructor and add array 

    function __construct( $id = false, $title = false, $content = false) {
        if(is_integer($id)){
            $this->id = $id;
        }
        if(is_string($title)){
            $this->title = $title;
        }
        if(is_string($content)){
            $this->content = $content;
        }
    }


}