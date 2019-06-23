<?php
require_once "Objet.class.php";
//La classe fille nommée Equipement de la classe mère qui est Objet

class Equipement extends Objet
{
  /*
  Constructeur de la classe Equipement
  Même paramètre que la classe Objet
  */
    public function __construct(string $nom, string $description)
    {
        parent::__construct($nom,$description);
    }

}
