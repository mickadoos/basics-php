<?php

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$id = $_POST['id'];
$currentUserId = $_SESSION['user']['id'];

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000  )) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (count($errors)) {
   view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'item' => $item,
        'errors' => $errors,
        'tableKey' => $db->getTableKey($query),
        'tableName' => $db->getTableName($query),
    ]);

   exit();
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('location: /notes');
die();