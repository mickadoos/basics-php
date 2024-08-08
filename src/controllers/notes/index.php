<?php

use Core\App;

$db = App::resolve('Core\Database');

$query = "select * from notes";
$items = $db->query($query)->get();
$tableKey = $db->getTableKey($query);

$items = sortItems($items, 'priority', 'asc');

view('items/index.view.php', [
    'heading' => 'Notes List',
    'items' => $items,
    'tableKey' => $db->getTableKey($query),
]);