<?php
// /src/controllers/HomeController.php

class HomeController extends Controller {
    public function view($page = '', $index = '', $abc = '') {
        $message = "Hello World! $page $index $abc";
        echo $this->json_response($message, 200);
    }
}
