<?php

use Core\MenuController;
use Core\Router;

require __DIR__ . '/../bootstrap/constants.php';

require BASE_PATH . '/Core/functions.php';

spl_autoload_register(function ($class) {

    if (strpos($class, '\\') === false) {
        return;
    }

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = base_path("/{$class}.php");

    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("Class file not found: {$file}");
    }
});

require base_path('/src/bootstrap.php');

$menuController = new MenuController();
$menuItems = $menuController->getMenuItems();

$router = new Router();
$routes = require base_path('/src/routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

view('partials/head.php');
view('partials/nav.php', [
    'menuItems' => $menuItems
]);
$router->route($uri, $method);
view('partials/footer.php');
