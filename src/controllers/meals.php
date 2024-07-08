<?php

$heading = "Meals List";
$items = $mealsData;
$items = sortItems($items, 'difficulty', 'asc');

require BASE_PATH . "/views/table-items.view.php";
