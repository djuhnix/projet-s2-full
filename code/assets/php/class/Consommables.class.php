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
     * @return int
     */
    public function getAmelioration():int
    {
        return $this->amelioration;
    }

    /**
     * @return int
     */
    public function getNombreUtilisation():int
    {
        return $this->nombreUtilisation;
    }

    /**
     * @return int
     */
    public function utiliser():int
    {
        $this->nombreUtilisation=$this->nombreUtilisation-1;
        return $this->amelioration;
    }
}
