<?php

use Core\App;

$db = App::resolve('Core\Database');

$id = $_POST['id'];
$currentUserId = $_SESSION['user']['id'];

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', ['id' => $id]);

header('location: /notes');
exit();