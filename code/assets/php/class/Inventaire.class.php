<?php

class Inventaire
{
    private $nombreMaxObjets ; //int
    private $contenu ;//Objet []

    /**
     * Constructeur de la classe Inventaie.
     * @param $newMax la taille max de l'inventaire.
     */
    public function __construct (int $newMax)
    {
        $this->nombreMaxObjets = $newMax;
        $this->contenu =  array();
    }
    
    public function addObjet(Objet $item) : void {
        if(count($this->contenu) <= $nombreMaxObjets-1){
            $this->contenu[] = $item;
        }
    }
    
}