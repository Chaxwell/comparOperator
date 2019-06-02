<?php

class TourOperator 
{
    private $id;
    private $name;
    private $grade;
    private $link;
    private $isPremium;


    public function __construct()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getIsPremium()
    {
        return $this->isPremium;
    }
}