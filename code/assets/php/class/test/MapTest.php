<?php
require_once "../Map.class.php";
require_once "../../../map/forest.csv";
$forest = new Map("../new_forest.csv", 64);
echo $forest -> showMap("../../../map/tiles.png","main");