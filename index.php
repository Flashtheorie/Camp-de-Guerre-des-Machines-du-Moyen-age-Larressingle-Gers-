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
     case '/medieval/datestarifs' :
        require __DIR__.'/views/datestarifs.php';
        break;
     case '/medieval/scolaire' :
        require __DIR__.'/views/scolaire.php';
        break;

     case '/medieval/acces' :
        require __DIR__.'/views/acces.php';
        break;
     case '/medieval/machines' :
        require __DIR__.'/views/machines.php';
        break;


    default:
        http_response_code(404);
        require 'views/404.php';
        break;
}

