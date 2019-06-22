<?php

class Person
{

    private $name = 'testing';

    private $title;

    public function __construct($name = "Jane Doe",$title = "MR")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function display()
    {
        
        echo self::hello() . $this->title . ' '. $this->name;
    }

    public static function hello(){
        return 'Hello ';
    }
}


$james = new Person("James","Mr");

$jd = new Person();

$james->display();

$jd->display();