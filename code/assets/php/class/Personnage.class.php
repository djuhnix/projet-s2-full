<?php

abstract class Personnage
{
    private $nom ; //string
    private $bourse ;//Inventaire

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