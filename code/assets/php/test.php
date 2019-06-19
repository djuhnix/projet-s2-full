<?php
$rep = $_POST["prems"];
$dir = "Direction :";
if ($rep == 0)
    $dir .= "Gauche";
elseif ($rep == 1)
    $dir .= "Haut";
elseif ($rep == 2)
    $dir .= "Droite";
elseif ($rep == 3)
    $dir .= "Bas";

$var = <<<HTML
	<div> $dir </div>
HTML;

echo $var;
