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
$epeeRouillee = new Arme("épée Rouillée","Une épée totalement rouillée. C'est mieux que rien mais ne vous attendez pas à faire des miracles",2);
$epeeGobeline = new Arme("épée Gobeline","Ressemble plus à un poignard qu'à une épée mais elle reste tout de meme affutée",3);
$player1->prendreObjet($baton);
$slime = new Ennemi("slime",3,1,2, $epeeRouillee);
$gobelin = new Ennemi("Gobelin",6,1,4, $epeeGobeline);
