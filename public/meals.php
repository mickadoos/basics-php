<?php

require "../src/data.php";
require "../src/functions.php";

sortItems($meals, 'cookingTime', 'asc');

require "../views/meals.view.php";