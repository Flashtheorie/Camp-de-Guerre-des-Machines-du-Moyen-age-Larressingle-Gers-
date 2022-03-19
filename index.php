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
    case '/medieval/about' :
        require __DIR__.'/views/about.php';
        break;
    case '/medieval/login' :
        require __DIR__.'/views/login.php';
        break;

    case '/medieval/createSession' :
        require __DIR__.'/action/createSession.php';
        break;

    case '/medieval/logout' :
        require __DIR__.'/action/logout.php';
        break;


    default:
        http_response_code(404);
        require 'views/404.php';
        break;
}

