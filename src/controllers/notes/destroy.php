<?php

use Core\Database;

$config = require(base_path('/bootstrap/config.php'));
$db = new Database($config['database']);

$id = $_POST['id'];
$currentUserId = 1;

$query = "select * from notes where id = :id";
$item = $db->query($query, ['id' => $id])->findOrFail();

authorize($item['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', ['id' => $id]);

header('location: /notes');
exit();