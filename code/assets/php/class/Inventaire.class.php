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
    
    public function ajouterObjet(Objet $item) : int {
        if(count($this->contenu) <= $nombreMaxObjets-1){
            $this->contenu[] = $item;
        }
        return count($this->contenu);
    }
    
    public function supprimerObjet(Objet $item) : int {
        //$this->contenu[array_flip($this->contenu)[$item]];
        unset($this->contenu[array_search($item, $this->contenu)]);
        return count($this->contenu);
    }
    
    public function donnerObjet(Inventaire $receveur, Objet $item) : int {
        $receveur->ajouterObjet($item);
        $this->supprimerObjet($item);
        return count($this->contenu);
    }
    
    public function getCapaciteRestante() : int {
        return $nombreMaxObjets - count($this->contenu);
    }
    
    public function __toString() : String {
        $res = "";
        foreach ($this->contenu as $key => $value) {
            $res .= "$key => $value\n";
        }
        return $res;
    }

}