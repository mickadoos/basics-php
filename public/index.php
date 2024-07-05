<?php

require "../src/data.php";
require "../src/functions.php";

sortItems($tasks, 'priority', 'desc');

require "../views/index.view.php";