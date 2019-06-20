<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 18/06/2019
 * Time: 16:33
 */

class Objet
{
    private $nom ; //string
    private $description ; //string

    function __construct(string $name, string $description)
    {
        $this->nom=$name;
        $this->description=$description;
    }

    /**
     * @return mixed
     */
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getDescription():string
    {
        return $this->description;
    }
}