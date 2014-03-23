<?php

    $url = 'http://api.yummly.com/v1/api/recipes?_app_id=29b9d634&_app_key=117626e0b87c1c939e82a5ed3102f6e8&q=onion+soup&requirePictures=true';
    $result = file_get_contents($url);
    $decode = json_decode($result, true);
    $decode = $decode['matches'];

    // var_dump($decode);
    foreach($decode as $recipe){
        $recipeImg  = $recipe['smallImageUrls'][0];
        $recipeName = $recipe['recipeName'];
        echo($recipeName . " " . $recipeImg);
        
    }

?>