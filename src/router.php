<?php

$routes = require BASE_PATH . '/src/routes.php';

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
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

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);