<?php

class Review 
{
    private $id;
    private $message;
    private $author;
    private $idTourOperator;


    public function __construct()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getIdTourOperator()
    {
        return $this->idTourOperator;
    }
}