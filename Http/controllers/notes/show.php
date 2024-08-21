<?php

use Core\App;

$db = App::resolve('Core\Database');

$id = $_GET['id'];
$currentUserId = $_SESSION['user']['id'];

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

view('items/show.view.php', [
    'heading' => 'Note',
    'item' => $item,
    'tableKey' => $db->getTableKey($query),
    'tableName' => $db->getTableName($query),
]);
