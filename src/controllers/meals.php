<?php

$config = require(BASE_PATH . '/bootstrap/config.php');
$db = new Database($config['database']);


$query = "select * from meals";
$items = $db->query($query)->fetchAll();
$tableKey = $db->getTableKey($query);

$heading = "Meals List";

$items = sortItems($items, 'priority', 'asc');

require BASE_PATH . "/views/table-items.view.php";
