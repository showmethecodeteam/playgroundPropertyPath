<?php

namespace SMTC;

class Person
{
    private $name;
    private $city;
    private $married;

    public function __construct($name)
    {
        $this->name = $name;
        $this->married = false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity(City $city)
    {
        $this->city = $city;
    }

    public function isMarried()
    {
        return $this->married;
    }

    public function setMarried($married)
    {
        $this->married = $married;
    }
}