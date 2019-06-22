<?php

//Create a class to get name of the person and say hello on constructor
//class must have a function to reverse the name
//create a method which request age and set into the class properties


class Person
{

    private $name;
    private $age;

    function __construct($name)
    {
        $this->name = $name;
        echo 'Hello ' . $name;
    }

    function reverseName()
    {
        return strrev($this->name);
    }

    function setAge($age)
    {
        $this->age = $age;
    }
}


$person = new Person("James");
echo $person->reverseName(); //semaJ
$person->setAge(9);
//Hello James
