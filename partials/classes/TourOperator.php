<?php

class TourOperator
{
    // DB Representation
    private $id;
    private $name;
    private $grade;
    private $link;
    private $isPremium;


    // Hydratation
    public function __construct(array $hydrate)
    {
        $this->hydrate($hydrate);
    }

    public function hydrate(array $properties)
    {
        foreach ($properties as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    // Getters & Setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade(int $grade)
    {
        $this->grade = $grade;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink(string $link)
    {
        $this->link = $link;
    }

    public function getIsPremium()
    {
        return $this->isPremium;
    }

    public function setIsPremium(int $isPremium)
    {
        $this->isPremium = $isPremium;
    }
}
