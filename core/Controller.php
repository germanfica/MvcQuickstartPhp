<?php
// /core/Controller.php
namespace Core;

class Controller {
    private $hasRendered = false;

    protected function render($view, $data = []) {
        // Check if we've already rendered
        if ($this->hasRendered) {
            throw new \Exception("Cannot render more than once");
        }

        // Path to the view file
        $viewPath = \dirname(__DIR__) . "/src/Views/{$view}";

        // Check if the view file exists
        if (file_exists($viewPath)) {
            // Extract data array to variables
            extract($data);

            // Include the view file
            include($viewPath);
        } else {
            throw new \Exception("View file $viewPath does not exist");
        }

        $this->hasRendered = true;
    }

    protected function json_response($message = null, $code = 200)
    {
        header_remove();
        http_response_code($code);
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        header('Content-Type: application/json');
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error'
        );
        header('Status: '.$status[$code]);
        return json_encode(array(
            'status' => $code < 300,
            'message' => $message
        ));
    }
}
