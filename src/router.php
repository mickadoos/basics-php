<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/src/controllers/todo-list.php',
    '/meals' => '/src/controllers/meals.php',
    '/products' => '/src/controllers/products.php',
    '/notes' => '/src/controllers/notes.php',
    '/note' => '/src/controllers/note.php'
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require BASE_PATH . '/src/data.php';
        $controller = BASE_PATH . $routes[$uri];
        require $controller;
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require BASE_PATH . "/views/{$code}.view.php";

    die();
}

routeToController($uri, $routes);