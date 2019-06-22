<?php

function HelloWorld(string &$name) : string{
    return 12;
}

$myname = "PADC";

$result = HelloWorld($myname);

var_dump($result);