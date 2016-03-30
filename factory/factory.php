<?php

class AutoMobile
{
    private $_color;
    private $_brand;

    public function __construct($color,$brand)
    {
        $this->_brand = $brand;
        $this->_color = $color;
    }

    public function getData() {
        return $this->_brand . ' ' . $this->_color;
    }



}


class AutoFactory
{

    public static function create($color,$brand) {
        return new Automobile($color,$brand);
    }

}
//main

$myCar = AutoFactory::create('red','audi');
echo $myCar->getData();