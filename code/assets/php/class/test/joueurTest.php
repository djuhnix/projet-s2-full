<?php

require_once "../Joueur.class.php";

$angel = new Joueur();

echo $angel ."\n";

$pomme = new Objet("pomme","miam miam");

$angel->prendreObjet($pomme);