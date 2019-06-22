<?php

//Create a function to reverse array and uppercase all strings
//Function should only accept array and return array

function myFunction(array $array): array
{
    $reversed_array = array_reverse($array);

    $uppercase_array = array_map(function ($item) {
        return strtoupper($item);
    }, $reversed_array);

    return $uppercase_array;
}



var_dump(myFunction(['hello', 'hi', 'aloha'])); //['ALOHA','HI','HELLO']
var_dump(myFunction([1, 2, 3])); //['3','2','1']
//var_dump(myFunction(true)); //Error
