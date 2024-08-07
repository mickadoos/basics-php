<?php

$router->get('/', '/src/controllers/notes/index.php');
$router->get('/notes', '/src/controllers/notes/index.php');
$router->get('/note', '/src/controllers/notes/show.php');
$router->delete('/note', '/src/controllers/notes/destroy.php');
$router->get('/notes/create', '/src/controllers/notes/create.php');
$router->post('/notes', '/src/controllers/notes/store.php');
