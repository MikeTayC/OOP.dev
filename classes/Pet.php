<?php

/*
* class keyword is reserved by PHP and ti allows us to begin makign a new class
* the name can be anyting we want, but must start with either a letter or underscore.
* it must be unique, you cannot have two classes of the same name,  you will get
* errors.
*/
class Pet
{
    protected $petName;
    protected $DOB;
    public static $petsCreated;
    protected $energy = 2000;

    public function __construct($name)
    {
        $this->setPetName($name);
        $this->DOB = time();
        self::$petsCreated++;
    }
    public function setPetName($newPetName) {
        $this->petName = $newPetName;
    }

    public function getPetName() {
        return $this->petName;
    }

    public function getDOB()
    {
        return $this->DOB;
    }

    public function getAllPetsCreated()
    {
        return self::$petsCreated;
    }

    public function walkPet()
    {
        $this->energy -= 250;
        echo $this->petName . ' is walking. Energy level is ' . $this->energy . '<br>';
        return $this;
    }

    public function restPet()
    {
        $this->energy += 100;
        echo $this->petName . ' is resting. Current energy: ' . $this->energy . '<br>';
        return $this;
    }

    public function eatApple(Apple $apple)
    {
        $this->energy += $apple->calories;
    }

    public function getEnergy()
    {
        return $this->energy;
    }
}