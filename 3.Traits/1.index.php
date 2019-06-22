<?php

class BaseClass
{
    public function Hello()
    {

        echo 'Hello ';
    }
}



class ChildClass extends BaseClass
{

    use AdditionalClass;
}

class ChildClassB extends BaseClass
{

    //use AdditionalClass;
}



trait AdditionalClass
{

    public function Hello()
    {

        parent::Hello();

        echo 'Solution!';
    }

    public function myName(){
        echo "thisis my name";
    }
}



$obj = new ChildClass();

$obj->myName();
