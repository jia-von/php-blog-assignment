<?php 

//Retrieve data from articles.json
$blogString = file_get_contents('../data/articles.json');
if($blogString !== FALSE)
{
    //Convert JSON from a string into a PHP array/object.
    if(($blogArray = json_decode($blogString)) !==NULL)
    {
        var_dump($blogArray);
    }
    else
    {
        echo 'Unable to convert blog data into PHP array/object';
    }
}
else
{
    echo 'Unable to retrieve blog data';
}


?>