<?php

use Core\MenuController;
use Core\Router;
use Core\Session;

require __DIR__ . '/../bootstrap/constants.php';

require BASE_PATH . '/vendor/autoload.php';

require BASE_PATH . '/Core/functions.php';

session_start();


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

Session::unflash();