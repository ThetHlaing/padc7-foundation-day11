<?php

class Person
{

    private $name;

    private $title;

    public function __construct($name,$title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function display()
    {
        echo $this->title . ' '. $this->name;
    }
}


$james = new Person("James","Mr");

$james->display();