<?php

$config = require(BASE_PATH . '/bootstrap/config.php');
$db = new Database($config['database']);


$query = "select * from tasks";
$items = $db->query($query)->get();
$tableKey = $db->getTableKey($query);

$heading = "Tasks List";

$items = sortItems($items, 'priority', 'asc');

require BASE_PATH . "/views/table-items.view.php";
