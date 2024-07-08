<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/src/controllers/todo-list.php',
    '/meals' => '/src/controllers/meals.php',
    '/products' => '/src/controllers/products.php'
];

if (array_key_exists($uri, $routes)) {
    require BASE_PATH . $routes[$uri];
}