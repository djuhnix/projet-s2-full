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

    /**
     * Ajoute la valeur du paramètre $perso à l'attribut personnage de la cellule
     * @param Personnage $perso
     */
    public function ajouterPersonnage(Personnage $perso) : void
    {
        $this -> personnage = $perso;
    }

    /**
     * Ajoute la valeur du paramètre $obj à l'attribut objets de la cellule
     * @param Objet $obj
     */

    public function ajouterObjet(Objet $obj) : void
    {
        $this -> objets -> ajouterObjet($obj);
    }


}