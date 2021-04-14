<?php
//understanding the concept of Interface in Php
interface Calculator {
    public function calculate();
}

class Circle implements Calculator{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculate(){

        return $this->radius*$this->radius;
    }
}

class Rectangle implements Calculator{

    private $width, $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculate(){

        return $this->width*$this->height;
    }
}

$obj = new Circle('3');
echo $obj->calculate() . PHP_EOL;

$obj = new Rectangle(3,4);
echo $obj->calculate() . PHP_EOL;

//interface works on contract basis means that if we define interface then class can implement the interface and 
//it is important to define the method of interface in their class 