<?php

//$table = $_GET()
$query = "select * from tasks";
$items = $db->query($query)->get();
$tableKey = $db->getTableKey($query);

$heading = "Tasks List";

$items = sortItems($items, 'priority', 'asc');

require BASE_PATH . "/views/items/index.view.php";
