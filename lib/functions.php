<?php

function home_url($path) {
    if($path){
        return SITE_URL . $path;
    }else{
        return SITE_URL;
    }

}
  
function get_module_name(){
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    
    $req = str_replace(SITE_URL,'', $url);

    $question = str_contains($req,'?');
    
    if($question){
        $req = substr($req,0, $question);
    }

    return $req;
}

function is_valid_url($url){
    if(empty($url)){
        return false;
    }

    return (filter_var($url, FILTER_VALIDATE_URL) !== false);
}


function redirect_to( $url ){
    
    header("Location: $url"); 
    die();
}