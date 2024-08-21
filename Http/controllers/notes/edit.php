<?php

use Core\App;

$db = App::resolve('Core\Database');

$id = $_GET['id'];
$currentUserId = $_SESSION['user']['id'];

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

view('notes/edit.view.php', [
    'heading' => 'Edit note',
    'errors' => [],
    'item' => $item,
    'tableKey' => $db->getTableKey($query),
    'tableName' => $db->getTableName($query),
]);
