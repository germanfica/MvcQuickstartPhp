<?php
// /src/controllers/DefaultController.php

namespace Src\Controllers;

use Core\Controller;

class DefaultController extends Controller {
    public function index() {
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
                'render function' => [
                    'info' => 'La función render es una función privada en DefaultController que se utiliza para renderizar el contenido de la página.',
                    'usage' => 'Esta función se invoca dentro del método index para generar el contenido HTML de la página. Puedes modificar esta función para cambiar la estructura y el contenido de tu página.',
                    'example' => [
                        'modifying' => 'Por ejemplo, si quieres cambiar el estilo de la página, podrías modificar la función render para cambiar el CSS de la página:',
                        'controller_code' => '<?php
// /src/controllers/DefaultController.php

class DefaultController extends Controller {
    public function index() {
        $this->render();
    }

    private function render() {
        // Aquí puedes modificar el contenido HTML y CSS de tu página
        ?>

        <!DOCTYPE html>
        <html>
        <!-- ... (Aquí sigue tu código) -->

        <?php
    }
}'
                    ]
                ]
                // Add more sections as needed
            ],
        ];

        $this->render('Default.html.php', ['welcomeMessage' => $welcomeMessage]);
    }
}
?>
