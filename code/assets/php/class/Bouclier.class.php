<?php
require_once "Equipement.class.php";
//La classe fille nommée Bouclier de la classe mère qui est Equipement
class Bouclier extends Equipement
{
  private $protection ;//int
    /*
  Constructeur de la classe Bouclier
   * @param protection : nombre de dégats absorbés
   * */
  public function __construct(string $nom, string $desc, int $protection)
  {
    parent::__construct($nom, $desc);
    $this->protection=$protection;
  }
    /*
    * accesseur de protection
    * @return le nombre de dégats absorbés par le Bouclier
  * */
  public function getProtections ():int
  {
    return $this->protection;
  }

}
