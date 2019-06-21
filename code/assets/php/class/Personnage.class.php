<?php

require_once "Inventaire.class.php";

abstract class Personnage
{
    protected $nom ; //string
    protected $bourse ;//Inventaire
    private $environement ; //salle
    protected $posX; // Int : Index de la case dans le tableau en attribut de salle.
    protected $posY;

    /**
     * Constructeur de la classe Personnage.
     * @param $newNom : le nom du Personnage
     * @param $map : l'environement dans lequel se trouve le Personnage.
     */
    public function __construct (String $newNom, Salle $map, int $x, int $y)
    {
        $this->nom = $newNom;
        $this->bourse =  new Inventaire(10);
        $this->$environement = $map;
        $this->posX = $x;
        $this->posY = $y;
        
    }
    
}