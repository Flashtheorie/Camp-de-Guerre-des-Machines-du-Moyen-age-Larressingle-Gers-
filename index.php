<?php

$request = $_SERVER['REQUEST_URI'];

;

switch ($request) {
    case '/medieval/home' :
        require __DIR__.'/views/home.php';
        break;
    case '/medieval/' :
        require __DIR__.'/views/home.php';
        break;
     case '/medieval/animations' :
        require __DIR__.'/views/animations.php';
        break;


    default:
        http_response_code(404);
        require 'views/404.php';
        break;
}

