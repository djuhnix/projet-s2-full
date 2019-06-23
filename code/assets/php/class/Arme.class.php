<?php
require_once "Equipement.class.php";
//  La classe fille nommée Arme de la classe mère qui est Equipement
class Arme extends Equipement
{
  private $degats;//int
  /*
    Constructeur de la classe Arme
   * @param degats : dégats de l'arme
    */
  public function __construct(string $nomEquip, string $description, int $degats)
  {
    parent::__construct($nomEquip, $description);
    $this->degats=$degats;
  }
    /*
    * accesseur de degats
    * @return nombre de dégats
* */
  public function getDegats():int
  {
    return $this->degats;
  }
}
