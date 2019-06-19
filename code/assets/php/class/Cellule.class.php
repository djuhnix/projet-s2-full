<?php
require_once "../autoload.php";

abstract class Cellule implements ProprieteCellule
{
       private $objets;
       private $personnage;
       private $texture;

    /**
     * Cellule constructor.
     *
     * @param $personnage
     * @param $texture
     */
    public function __construct($texture)
    {
        $this->texture = $texture;
    }


    /**
     * Retourne le tableau d'objet susceptible d'etre sur la cellule
     */
    public function getObjets() : Inventaire
    {
        return $this -> objets;
    }

    public function ajouterPersonnage(Personnage $perso) : void
    {
        $this -> personnage = $perso;
    }

    public function ajouterObjet(Objet $obj) : void
    {
        $this -> objets -> ajouterObjet($obj);
    }


}