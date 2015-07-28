<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 7/27/15
 * Time: 6:08 PM
 */
//By extending classes, we give other
//developers the opportunity to manipulate our class any
//way we want without harming the structure of the original
//class. It also makes code less cluttered and easier to manage.
class CanadianPet extends Pet
{
    const TAX = .1;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->ohCanada();
    }
   public function setPetName($newPetName)
   {
       $this->petName =$this->checkPetName($newPetName);
   }
    private function checkPetName($petNameToCheck)
    {
        return str_replace('a','', $petNameToCheck);
    }

    private function ohCanada()
    {
        echo 'Eh.' . '<br>';
    }

    public function getPetPrice($price)
    {
        return $price + ($price * self::TAX);
    }
}