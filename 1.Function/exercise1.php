<?php 

//Create a sum function
//If parameters are not set, use 0 as default
//Return type and parameter types must only allow number types

function sum($a = 0,$b = 0) : int {
    
    if(gettype($a) === 'integer' && gettype($b) === '1'){
        return $a + $b;
    }
    else{
        throw new Exception("Parameter must be integer");
    }
    
}



//echo sum(1,2); //3
//echo sum(1); //1
echo sum(true,'3'); //Error