<?php

require_once "Inventaire.class.php";

abstract class Personnage
{
    protected $nom ; //string
    protected $bourse ;//Inventaire

    /**
     * Constructeur de la classe Personnage.
     * @param 
     */
    public function __construct (String $newNom)
    {
        $this->nom = $newNom;
        $this->bourse =  new Inventaire(10);
    }
    
}