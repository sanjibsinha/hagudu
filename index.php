<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);


require 'vendor/autoload.php';

// require 'core/router.php';

//$router = new Router();
//
//require 'routes.php';
$router = Router::load('routes.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);


