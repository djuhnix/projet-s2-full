<?php
require_once "../autoload.php"

abstract class Cellule
{
       private $objets;
       private $personnage;
       private $adversaire;
       private $texture;

       public function __construct()
       {
           echo "Construction d'une cellule";
       }
       /*
       public function estTraversable() : bool
       {
            #à compléter
       }
       */
}