<?php

require "../src/data.php";
require "../src/functions.php";

sortItems($products, 'price', 'desc');

require "../views/products.view.php";