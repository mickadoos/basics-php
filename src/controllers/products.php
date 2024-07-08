<?php

$heading = "Products List";
$items = $productsData;
$items = sortItems($items, 'stock', 'asc');

require BASE_PATH . "/views/table-items.view.php";
