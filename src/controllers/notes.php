<?php

$config = require(BASE_PATH . '/bootstrap/config.php');
$db = new Database($config['database']);


$query = "select * from notes";
$items = $db->query($query)->fetchAll();
$tableKey = $db->getTableKey($query);

$heading = "Notes List";

$items = sortItems($items, 'priority', 'asc');

require BASE_PATH . "/views/table-items.view.php";
