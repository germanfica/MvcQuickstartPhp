<?php
// /index.php

// Core
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Controller.php';
// Make sure to include your controllers here
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/UserController.php';

$router = new Router();
$router->route($_SERVER['REQUEST_URI']);
