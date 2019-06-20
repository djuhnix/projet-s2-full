<?php

// Declaration de l'interface ''
interface Interaction
{
    public function seFaireAttaquer();
    public function seDeplacer( int $x, int $y);
    public function mourir();
    public function interagir(Object $cible);
}