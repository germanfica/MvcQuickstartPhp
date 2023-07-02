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

## Add render function

The `render` function in `DefaultController.php` is a private function used to generate the HTML content of the application's main page. This function is invoked within the `index` method.

### Usage

This function generates a welcome message and documentation about how the application works. You can modify this function to change the content and the structure of your page.

For example, you could modify this function to change the style of your page. To do this, simply change the HTML and CSS code within the `render` function.

```php
<?php
// /src/controllers/DefaultController.php

class DefaultController extends Controller {
    public function index() {
        $this->render();
    }

    private function render() {
        // You can modify the HTML and CSS content of your page here
        ?>

        <!DOCTYPE html>
        <html>
        <!-- ... (Your code continues here) -->

        <?php
    }
}
```
