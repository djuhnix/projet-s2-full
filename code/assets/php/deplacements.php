<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 19/06/2019
 * Time: 15:31
 */

$x = $_POST["x"];
$y = $_POST["y"];
$dir = "Direction :";
if ($x == -1)
    $dir .= "Gauche";

elseif ($x == 1)
    $dir .= "droite";
if ($y == 1)
    $dir .= "Haut";
elseif ($y == -1)
    $dir .= "Bas";

$var = <<<HTML
	<div> $dir </div>
HTML;

echo $var;
