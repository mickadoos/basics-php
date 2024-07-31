<?php

require __DIR__ . '/../bootstrap/constants.php';

require BASE_PATH . "/src/data.php";
require BASE_PATH . "/src/functions.php";
require BASE_PATH . "/src/Database.php";
require BASE_PATH . "/src/Response.php";
require BASE_PATH . "/src/MenuController.php";

$menuController = new MenuController();;
$menuItems = $menuController->getMenuItems();

require BASE_PATH . "/src/router.php";