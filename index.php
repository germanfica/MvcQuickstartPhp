<?php
// /index.php

// Core
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Controller.php';
// Make sure to include your controllers here
require_once __DIR__ . '/src/controllers/DefaultController.php';
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/UserController.php';

// Retrieve the current script directory, delete the first slash and replace it in the REQUEST_URI
$subdirectory = ltrim(dirname($_SERVER['PHP_SELF']), '/');
$url = ltrim(str_replace($subdirectory, '', $_SERVER['REQUEST_URI']), '/');

$router = new Router();
$router->route($url);