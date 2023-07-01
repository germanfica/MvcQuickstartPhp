# MvcQuickstartPhp

## Controller samples

The following are the sample controllers implemented with their routes.

- HomeController.php: `/home/view/2/3/5`

_Response:_
```json
{"status":true,"message":"Hello World! 2 3 5"}
```
- UserController.php: `/user/add`

_Response:_
```json
{"status":true,"message":"Hello World! 2 3 5"}
```

## Add a new controller

1. Create a new file in the following path:

```
src/Controllers/<YOUR_CONTROLLER_NAME>Controller.php
```

3. Name your controller class as the example bellow:

```php
<?php
// /src/controllers/<YOUR_CONTROLLER_NAME>Controller.php

class <YOUR_CONTROLLER_NAME>Controller extends Controller { // Add "Controller" suffix to your Controller name
    public function yourAction() {
        // Implement your "action" logic here
        echo $this->json_response("Your action", 200);
    }
}
```

4. Include your new Controller in the `index.php` file:

```php
<?php
// /index.php

// Core
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Controller.php';
// Make sure to include your controllers here
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/UserController.php';
require_once __DIR__ . '/src/controllers/<YOUR_CONTROLLER_NAME>Controller.php'; // <-- Add your new controller here

$router = new Router();
$router->route($_SERVER['REQUEST_URI']);
```

And that's it.