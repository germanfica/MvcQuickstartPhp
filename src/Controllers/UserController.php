<?php
// /src/controllers/UserController.php

class UserController extends Controller {
    public function add() {
        // Implement your "add user" logic here
        echo $this->json_response("User added", 200);
    }
}
