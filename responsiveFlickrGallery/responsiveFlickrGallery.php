<?php
define ("apiKey", "");

function getAlbumsIDs($userID){
    $json = file_get_contents("https://api.flickr.com/services/rest/?method=flickr.photosets.getList&api_key=".apiKey."&user_id=$userID&format=json&nojsoncallback=1");
    $json = json_decode($json, true);
    $lenght = count($json["photosets"]["photoset"]);

    $array = [];

    for ($i = 0; $i < $lenght; $i++) {
        $id = $json["photosets"]["photoset"][$i]["id"];
        array_push($array, $id);
    }

    return $array;
}
// $id require array
function displayAlbum($id, $userID){
    $lenght = count($id);
    $display = "";
    for ($i = 0; $i < $lenght; $i++){
        $display.= "<div class='col-md-4'><iframe class='generateIframe' src=\"http://www.flickr.com/photos/$userID/albums/$id[$i]/player/\" width=\"100%\" frameborder=\"0\" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div>";
    }
    return $display;
}