<?php

require '../helpers.php';

require base_path('router.php');

$router = new Router();

$routes = require base_path('routes.php');

$uri    = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

?>
