<?php
// /src/controllers/DefaultController.php

class DefaultController extends Controller {
    public function index() {
        $this->render();
    }

    private function render() {
        $welcomeMessage = [
            'message' => 'Welcome to MvcQuickstartPhp application!',
            'documentation' => [
                'defaultController' => [
                    'info' => 'El DefaultController es el controlador que maneja la ruta por defecto ("/") de la aplicación. Cuando ningún controlador se especifica en la URL, se invoca el DefaultController.',
                    'usage' => 'El DefaultController es comúnmente usado para servir la página de inicio de la aplicación o una página de bienvenida similar. Puedes personalizar el DefaultController para que se ajuste a las necesidades de tu aplicación.',
                    'example' => [
                        'modifying' => 'Por ejemplo, si quisieras hacer que la página de inicio muestre una lista de productos, podrías modificar el método index en DefaultController para que haga exactamente eso.',
                        'controller_code' => '<?php
// /src/controllers/DefaultController.php

class DefaultController extends Controller {
    public function index() {
        // Tu lógica para listar productos va aquí
    }
}'
                    ]
                ],
                'routes' => [
                    'info' => 'Las rutas son manejadas por la clase Router. La URL se descompone en partes, y la primera parte se utiliza para determinar el controlador, la segunda parte para la acción, y cualquier parte adicional se pasa como parámetros a la acción.',
                    'usage' => 'Para crear una nueva ruta, necesitas crear una nueva clase de controlador en /src/controllers, y agregar métodos para cada acción que quieras manejar. Asegúrate de que el nombre de la clase del controlador coincida con la primera parte de la URL que deseas manejar, y que el nombre del método coincida con la segunda parte de la URL.',
                    'example' => [
                        'modifying' => 'Por ejemplo, si quieres manejar la URL /products/list, podrías crear una clase de controlador llamada ProductsController con un método list:',
                        'controller_code' => '<?php
// /src/controllers/ProductsController.php

class ProductsController extends Controller {
    public function list() {
        // Tu lógica para listar productos va aquí
    }
}'
                    ]
                ],
                // Add more sections as needed
            ],
        ];

        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?= $welcomeMessage['message'] ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <style>
                body {
                    background-color: #383434; /* dark brown grey */
                    color: #FFFFFF; /* white */
                    font-family: 'Helvetica', 'Helvetica Neue', 'Arial', 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', 'Meiryo', sans-serif;
                }
                .card {
                    border-color: #4AEBFF; /* intense blue */
                    border-radius: 25px;
                }
                .card-body {
                    color: #FFFFFF; /* white */
                    background: #4b6cb7;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to right, #182848, #4b6cb7);  /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to right, #182848, #4b6cb7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                }
                .text-example {
                    color: #4AEBFF !important;
                }
            </style>
        </head>
        <body>
            <div class="container py-5">
                <h1><?= $welcomeMessage['message'] ?></h1>
                <?php foreach ($welcomeMessage['documentation'] as $key => $docSection): ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= ucfirst($key) ?></h5>
                            <p class="card-text"><?= $docSection['info'] ?></p>
                            <p class="card-text"><?= $docSection['usage'] ?></p>
                            <?php if (isset($docSection['example'])): ?>
                                <h6 class="card-subtitle mb-2 text-example card card-body">Example:</h6>
                                <p class="card-text"><?= $docSection['example']['modifying'] ?></p>
                                <pre class="bg-dark text-white p-2"><code><?= htmlspecialchars($docSection['example']['controller_code']) ?></code></pre>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </body>
        </html>
        <?php
    }
}
?>