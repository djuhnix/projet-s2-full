<?php

interface ProprieteCellule {
    public function estTraversable() : bool;

    /**
     * Donne le nombre de points de vie à ajouter ou à retirer
     * @return int
     */
    public function getEffet() : int;

    /**
     * Retourne le tableau dr'objet susceptible d'etre sur la cellule
     */
    public function getObjets() : Inventaire ;
}