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
$epee = new Arme("epee","",2);
$player1->prendreObjet($epee);

