<?php

$config = require(BASE_PATH . '/bootstrap/config.php');
$db = new Database($config['database']);


$id = $_GET['id'];
$query = "select * from notes where id = :id";
$items = $db->query($query, ['id' => $id])->fetchAll();
$tableKey = $db->getTableKey($query);
$tableName = $db->getTableName($query);

$heading = "Note";

$items = sortItems($items, 'priority', 'asc');

require BASE_PATH . "/views/single-item.view.php";
