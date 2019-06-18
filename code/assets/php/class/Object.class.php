<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 18/06/2019
 * Time: 16:33
 */

class Object
{
    private $nom ; //string
    private $description ; //string

    function __construct(string $name, string $description)
    {
        $this->name=$name;
        $this->description=$description;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}