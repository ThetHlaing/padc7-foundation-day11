<?php

//Create a House Class
//It should use Trait class which have the sales function

class House{
    use Sales;
}

trait Sales{
    function saleThisHouse(){
        echo 'this is sold';
    }
}

$house = new House();
$house->saleThisHouse();