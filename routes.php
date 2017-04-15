<?php


//$routes = [
//    
//    $router->get('', 'PagesController@home'),
//    $router->get('', 'PagesController@about'),
//    $router->get('', 'PagesController@contact')
//    
//];

$router->define([
    
    "" => "controllers/index.php",
    "about" => "controllers/about.php",
    "contact" => "controllers/contact.php"
    
    
]);

