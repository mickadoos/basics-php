<?php

use Core\App;

$db = App::resolve('Core\Database');

$id = $_GET['id'];
$currentUserId = 1;

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

$tableKey = $db->getTableKey($query);
$tableName = $db->getTableName($query);

$heading = "Note";


require BASE_PATH . "/views/items/show.view.php";
