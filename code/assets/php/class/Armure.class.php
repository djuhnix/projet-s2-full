<?php
require_once "Equipement.class.php";
//  La classe fille nommée Armures de la classe mère qui est Equipement
class Armure extends Equipement
{
  private $protection ;//int
  
    /*
  Constructeur de la classe Armures
   * @param nomEquip : nom de l'équipement
   * @param protection : nombre de dégats absorbés
   * */
  public function __construct(string $nomEquip,string $description, int $protection)
  {
    parent::__construct($nomEquip, $description);
    $this->protection=$protection;
  }
  
    /*
    * accesseur de protection
    * @return le nombre de dégats absorbés par l'Armure
  * */
  public function getProtection():int
  {
    return $this->protection;
  }

}
