<?php

//Create a function to check if the string is uppercase
//Function should only accept string as input and return boolean

function isUppercase(string $value) : bool
{
    return $value == strtoupper($value);
}




var_dump(isUppercase('String')); //false;
var_dump(isUppercase('UPPERCASE')); //true;

