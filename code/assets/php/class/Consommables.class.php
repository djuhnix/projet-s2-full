<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 18/06/2019
 * Time: 16:44
 */

class Consommables
{
    private $amelioration ; //int
    private $nombreUtilisation ;

    /**
     * Consommables constructor.
     * @param $amelioration
     * @param $nombreUtilisation
     */
    public function __construct($amelioration, $nombreUtilisation)
    {
        $this->amelioration = $amelioration;
        $this->nombreUtilisation = $nombreUtilisation;
    }

    /**
     * @return mixed
     */
    public function getAmelioration()
    {
        return $this->amelioration;
    }

    /**
     * @return mixed
     */
    public function getNombreUtilisation()
    {
        return $this->nombreUtilisation;
    }

    public function utiliser():int
    {
        $this->nombreUtilisation=$this->nombreUtilisation-1;
        return $this->amelioration;
    }
}
