<?php
// /core/Router.php
namespace Core;

class Router {
    public function route($url) {
        $urlParts = explode('/', ltrim($url, '/'));

        // Ignore the first element if it's an empty string or matches the subdirectory
        if($urlParts[0] === '') {
            array_shift($urlParts);
        }

        $controllerName = !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : 'DefaultController';
        // Agrega la ubicación de tus controladores antes del nombre del controlador
        $controllerName = 'Src\\Controllers\\' . $controllerName;
        $actionName = !empty($urlParts[1]) ? $urlParts[1] : 'index';

        $params = array_slice($urlParts, 2); // Extract parameters from the URL

        // Ahora debería buscar el nombre completo del controlador
        if (class_exists($controllerName)) {
            // Aquí también debería instanciar con el nombre completo del controlador
            $controller = new $controllerName();
            call_user_func_array([$controller, $actionName], $params); // Use call_user_func_array to invoke the function with a set of parameters defined in an array
        } else {
            throw new \Exception("Controller $controllerName not found");
        }
    }
}
