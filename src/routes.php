<?php

$router->get('/', '/src/controllers/notes/index.php');

$router->get('/notes', '/src/controllers/notes/index.php');
$router->post('/notes', '/src/controllers/notes/store.php');

$router->get('/note', '/src/controllers/notes/show.php');
$router->delete('/note', '/src/controllers/notes/destroy.php');

$router->get('/note/edit', '/src/controllers/notes/edit.php');
$router->patch('/note', '/src/controllers/notes/update.php');

$router->get('/notes/create', '/src/controllers/notes/create.php');

$router->get('/register', '/src/controllers/registration/create.php')->only('guest');
$router->post('/register', '/src/controllers/registration/store.php');
