<?php
//Understanding the concept of Encapsulation

class Bank{
    //field or properties
    private $branchName, $branchAddress, $branchPhonenumber;

    //constructor function
    public function __construct($branchName, $branchAddress, $branchPhonenumber){
        $this->branchName = $branchName;
        $this->branchAddress = $branchAddress;
        $this->branchPhonenumber = $branchPhonenumber;
    }
    public function __get($property){
       // __get function is used to view all the properties that can access outside the class
        if(property_exists($this, $property)){
            return $this->$property;   
        }
    }
    
    public function createAccount($branchName, $branchAddress, $branchPhonenumber){
        return "Created Account Details";
    }

}
//Bank object creation
$sbibank = new Bank("State Bank Of India", "Lucknow","011-45120012");

echo $sbibank->branchName . PHP_EOL;
echo $sbibank->branchAddress . PHP_EOL;
echo $sbibank->branchPhonenumber . PHP_EOL;
//here we can only read the properties of class

// $newNAme = $sbibank->branchName = "New Name";
// echo $newNAme; //this gives fatal error i.e cannot access private property of bank
