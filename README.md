# MvcQuickstartPhp

A quick start PHP Model-View-Controller (MVC) project that simplifies the process of creating new routes, controllers, and actions.

## File Structure

This is an example of the project's file structure.

```plaintext
/MvcQuickstartPhp
├── /core
│   ├── Controller.php
│   └── Router.php
├── /src
│   ├── /controllers
│   │   ├── DefaultController.php
│   │   ├── HomeController.php
│   │   └── UserController.php
│   └── /views
│       ├── Default.html.php
│       ├── Add.html.php
│       └── Index.html.php
├── autoload.php
├── index.php
└── README.md
```

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

2. Name your controller class as the example bellow:

```php
<?php
// /src/controllers/<YOUR_CONTROLLER_NAME>Controller.php

namespace Src\Controllers;

use Core\Controller;

class <YOUR_CONTROLLER_NAME>Controller extends Controller { // Add "Controller" suffix to your Controller name
    public function yourAction() {
        // Implement your "action" logic here
        echo $this->json_response("Your action", 200);
    }
}
```

__That's it! :tada: Your new controller is now ready to use.__

Note: You no longer need to manually include the new controller in the `index.php` file thanks to `autoload.php`. Controllers in the `src/Controllers/` directory will be loaded automatically.

_Deprecated way:_
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

## Render a view

The `render()` function is used to generate the HTML content for any page within your application. This function is invoked within any action that needs to display a view.

### Usage

This function generates a HTML content of your application's page. You can modify this function to change the content and the structure of your page.

To do this, you need to call this function in your action, passing the name of the view file and an array with the data you want to pass to the view.

```php
<?php
// /src/controllers/YourController.php

namespace Src\Controllers;

use Core\Controller;

class YourController extends Controller {
    public function index() {
        $this->render('your/index.html.php', ['data' => 'Your data']);
    }
}
```

Then, you need to create a PHP file with the same name in the Views directory. It is recommended to name the view with the same name as the action that is rendering it.

## Important Files
- `index.php`: This is the entry point of the application. This is where Router is instantiated and called.
- `Router.php`: It is in charge of interpreting the URL routes and calling the corresponding controller and method.
- `Controller.php`: This is the base class for all controllers. This is where the logic common to all controllers is found, such as the rendering function.
- `autoload.php`: Automatically loads the controllers. There is no need to manually include them in index.php.

## More information

For more details on how this project works, check out the source code files in the following locations:

- `/index.php`
- `/core/Router.php`
- `/core/Controller.php`
- `/src/controllers/DefaultController.php`
- `/src/controllers/HomeController.php`
- `/src/controllers/UserController.php`

And also the view files in:

- `/src/views/Default.html.php`
- `/src/views/user/Add.html.php`
- `/src/views/user/Index.html.php`
