<?php
// /src/controllers/UserController.php

class UserController extends Controller {
    public function index() {
        $this->render('user/index.html.php');
    }

    public function add() {
        // Implement your "add user" logic here
        // echo $this->json_response("User added", 200);
        $this->render('user/add.html.php');
    }
}
