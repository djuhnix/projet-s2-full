<?php

interface ProprieteCellule {
    public function estTraversable() : bool;
    public function infligerDegats() : int;
    public function procureSoin() : int;
    public function procureObjet(Objet $obj) : void;
}