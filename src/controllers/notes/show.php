<?php

use Core\Database;

$config = require(base_path('/bootstrap/config.php'));
$db = new Database($config['database']);

$id = $_GET['id'];
$currentUserId = 1;

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

view('items/show.view.php', [
    'heading' => 'Note',
    'item' => $item,
    'tableKey' => $db->getTableKey($query),
    'tableName' => $db->getTableName($query),
]);
