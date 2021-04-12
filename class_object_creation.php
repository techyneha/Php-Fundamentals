<?php
//Understanding the concept of Class and Object

class Person{
    //field
    private $name, $age, $address, $profession;

    //constructor function
    public function __construct($name,$age,$address,$profession){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->profession = $profession;
    }

    function develops($profession){
        return "Software";
    }

    public function introduce(){

        return "My name is $this->name I am $this->age years old and lives in $this->address.";
    }

}
//Person object creation
$mahesh = new Person("Mahesh",40,"Location","SE");
$suresh = new Person("Suresh",37,"Delhi","S.E");
echo $mahesh->introduce();
echo PHP_EOL;
echo $suresh->introduce();
echo PHP_EOL;