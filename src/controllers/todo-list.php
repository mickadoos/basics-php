<?php

$heading = "To Do List";
$items = $tasksData;
$items = sortItems($items, 'priority', 'asc');

require BASE_PATH . "/views/table-items.view.php";
