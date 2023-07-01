<?php
// /core/Router.php

class Router {
    public function route($url) {
        $urlParts = explode('/', $url);
        $controllerName = ucfirst($urlParts[1]) . 'Controller';
        $actionName = $urlParts[2];
        $params = array_slice($urlParts, 3); // Extract parameters from the URL

        $controller = new $controllerName();
        call_user_func_array([$controller, $actionName], $params); // Use call_user_func_array to invoke the function with a set of parameters defined in an array
    }
}
