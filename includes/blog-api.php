<?php

function retrieveArticles() {
    $responseString = file_get_contents('../data/articles.json');
    //var_dump($responseString); -- checked and it's good

    //convert response JSON string into a PHP array/object
    if($responseString !== FALSE)
    {
        if(($responseObj = json_decode($responseString)) !==NULL)
        {
            //var_dump($responseObj); -- checked and it's okay
            //Collect the array of results from the response object's 'articles' property
            $articles = $responseObj->articles;
            //var_dump($articles); --okay
            return $articles;

        }
        else
        {
            echo 'Could not interpret API response.';
        }
    }
    else
    {
        echo 'Unable to connect/retrieve data from API';
    }
    return FALSE;
}