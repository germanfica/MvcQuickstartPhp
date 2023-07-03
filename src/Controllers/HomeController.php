<?php
// /src/controllers/HomeController.php

namespace Src\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function view($page = '', $index = '', $abc = '') {
        $message = "Hello World! $page $index $abc";
        echo $this->json_response($message, 200);
    }
}
