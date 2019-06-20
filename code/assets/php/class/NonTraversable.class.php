<?php

require_once "../autoload.php";

class NonTraversable extends Cellule
{
    public function __construct($texture)
    {
        parent::__construct($texture);

    }

    public function estTraversable(): bool
    {
        return false;
    }

    /**
     * Donne le nombre de points de vie à ajouter ou à retirer
     * @return int
     */
    public function getEffet(): int
    {
        return 0;
    }


}