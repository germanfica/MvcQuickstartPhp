<?php
// /src/controllers/DefaultController.php

namespace Src\Controllers;

use Core\Controller;

class DefaultController extends Controller {
    public function index() {
        $welcomeMessage = [
            'message' => 'Welcome to MvcQuickstartPhp application!',
            'documentation' => [
                'DefaultController' => [
                    'info' => 'The DefaultController is the controller that handles the default ("/") route of the application. When no controller is specified in the URL, the DefaultController is invoked.',
                    'usage' => 'The DefaultController is commonly used to serve the homepage of the application or a similar welcome page. You can customize the DefaultController to fit your application\'s needs.',
                    'examples' => [
                        [
                            'title' => 'example',
                            'description' => 'For example, if you wanted to make the homepage display a list of products, you could modify the index method in DefaultController to do just that.',
                            'code' => '<?php
// /src/controllers/DefaultController.php

namespace Src\Controllers;

use Core\Controller;

class DefaultController extends Controller {
    public function index() {
        // Your logic for listing products goes here
    }
}'
                        ]
                    ]
                ],
                'Routes' => [
                    'info' => 'Routes are handled by the Router class. The URL is broken down into parts, with the first part being used to determine the controller, the second part the action, and any additional parts passed as parameters to the action.',
                    'usage' => 'To create a new route, you need to create a new controller class in /src/controllers, and add methods for each action you want to handle. Make sure your controller class name matches the first part of the URL you want to handle, and the method name matches the second part of the URL.',
                    'examples' => [
                        [
                            'title' => 'example',
                            'description' => 'For example, if you want to handle the URL /products/list, you could create a controller class named ProductsController with a list method:',
                            'code' => '<?php
// /src/controllers/ProductsController.php

namespace Src\Controllers;

use Core\Controller;

class ProductsController extends Controller {
    public function list() {
        // Your logic for listing products goes here
    }
}'
                        ]
                    ]
                ],
                'Render a view' => [
                    'info' => 'The render() function is used to generate the HTML content for any page within your application. This function is invoked within any action that needs to display a view.',
                    'usage' => 'This is a simplified way of using the render() function. The specific view that is being rendered is `example/add.html.php`. In your application, you can replace this with the path to the view you need to render. If you need to pass data to the view, you can do so by providing an associative array as the second argument to the render() function. This array should have keys corresponding to the variables you want to use in the view.',
                    'examples' => [
                        [
                            'title' => 'Example of ExampleController.php',
                            'description' => 'For example, in your `ExampleController.php` controller, you could send the $welcomeMessage variable to display the welcome message in `example/add.html.php`.',
                            'code' => '<?php
// /src/controllers/ExampleController.php

namespace Src\Controllers;

use Core\Controller;

class ExampleController extends Controller {
    public function add() {
        $welcomeMessage = \'Welcome to my application\';
        $this->render(\'example/add.html.php\', [\'welcomeMessage\' => $welcomeMessage]); // Render your add view with the welcomeMessage variable
    }
}'
                        ],
                        [
                            'title' => 'Example of add.html.php',
                            'description' => 'For example, in your `example/add.html.php` view, you could use the $welcomeMessage variable to display the welcome message.',
                            'code' => '<!DOCTYPE html>
<html>
<head>
    <title> <?= $welcomeMessage ?> </title>
<body>
    <h1> <?= $welcomeMessage ?> </h1>
</body>
</html>
',
// Add more examples...
                        ]
                    ]
                ]
            ]
        ];

        $this->render('Default.html.php', ['welcomeMessage' => $welcomeMessage]);
    }
}
?>
