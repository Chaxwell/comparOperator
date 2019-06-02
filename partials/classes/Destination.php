<?php

class Destination
{
    private $id;
    private $location;
    private $price;
    private $idTourOperator;


    public function __construct()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getIdTourOperator()
    {
        return $this->idTourOperator;
    }
}