<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 19/06/2019
 * Time: 15:33
 */

<?php
require_once("autoload.php");

$player1 = new Joueur();
$baton = new Arme("baton","simple bout de bois comme on en voit partout dans la foret",1);
$player1->prendreObjet($baton);

