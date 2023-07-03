<?php
// /index.php

require_once __DIR__ . '/autoload.php';

// Retrieve the current script directory, delete the first slash and replace it in the REQUEST_URI
$subdirectory = ltrim(dirname($_SERVER['PHP_SELF']), '/');
$url = ltrim(str_replace($subdirectory, '', $_SERVER['REQUEST_URI']), '/');

$router = new Core\Router();
$router->route($url);
