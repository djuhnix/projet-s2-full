<?php
require_once "../autoload.php";

class Traversable extends Cellule
{
    public function __construct( $texture )
    {
        if (parent::estTraversable())
        {
            parent::__construct($texture);
        }
    }

    public function estTraversable(): bool
    {
        return true;
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