<?php

class BaseClass
{
    public function Hello()
    {

        echo 'Mcn ';
    }
}

trait AdditionalClass
{

    public function Hello()
    {

        parent::Hello();

        echo 'Solution!';
    }
}



class CompName extends BaseClass
{

    use OtherCls;
}



$obj = new CompName();

$obj->Hello();
