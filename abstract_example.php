<?php
//understanding the concept of Abstract in Php
Abstract class AbstractCalculator {
    abstract public function calculate();

    public function printData(){
        return "Data successfully show \n";
    }
}

class Circle extends AbstractCalculator{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculate(){

        return $this->radius*$this->radius;
    }

    // public function printData(){
    //     return "Data successfully show \n";
    // }
}

class Rectangle extends AbstractCalculator{

    private $width, $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculate(){

        return $this->width*$this->height;
    }

    // public function printData(){
    //     return "Data successfully show \n";
    // }
}

$obj = new Circle('3');
echo $obj->calculate() . PHP_EOL;
echo $obj->printData() . PHP_EOL;

$obj = new Rectangle(3,4);
echo $obj->calculate() . PHP_EOL;

