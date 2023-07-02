<?php
// /core/Router.php

class Router {
    public function route($url) {
        $urlParts = explode('/', ltrim($url, '/'));

        // Ignore the first element if it's an empty string or matches the subdirectory
        if($urlParts[0] === '') {
            array_shift($urlParts);
        }
        $controllerName = !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : 'DefaultController';
        $actionName = !empty($urlParts[1]) ? $urlParts[1] : 'index';

        $params = array_slice($urlParts, 2); // Extract parameters from the URL

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            call_user_func_array([$controller, $actionName], $params); // Use call_user_func_array to invoke the function with a set of parameters defined in an array
        } else {
            throw new Exception("Controller $controllerName not found");
        }
    }
}
