<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function setPerson($postFirstName)
    {
        $this->firstName = ucfirst($postFirstName);
    }

    public function getLastName()
    {
        return ucfirst($this->lastName);
    }

}

$pete = new Person();
$pete->firstName = "piet";
$pete->lastName = "berkhout";
$pete->age = 66;

//echo "De voornaam = ".$pete->firstName;
//$pete->firstName = "Pete";
//echo "De voornaam = ".$pete->firstName;

echo $pete->getLastName();
echo $pete->lastName;
echo "<pre>";
var_dump($pete);