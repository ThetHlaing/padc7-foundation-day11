<?php

//Create Calculator Class which can request 2 variable at the constructor
//Class must have add,substract,multiply and divide methods

class Calculator {
    private $num1;
    private $num2;

    function __construct(int $num1, int $num2)
    {
        $this->$num1 = $num1;
        $this->$num2 = $num2;    
    }

    function sum(){
        return $this->num1 + $this->num2;
    }
    function sub(){
        return $this->num1 - $this->num2;
    }
    function divide(){
        return $this->num1 / $this->num2;
    }
    function multiply(){
        return $this->num1 * $this->num2;
    }
}