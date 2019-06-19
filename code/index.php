<?php
require_once("assets/php/autoload.php");
$page = new WebPage("Acceuil");

$page -> appendJsUrl("lancement.js");
echo $page -> toHTML();
