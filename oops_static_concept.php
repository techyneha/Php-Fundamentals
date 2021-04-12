<?php
//Understanding the concept of static and Constant keywords
class Student {
    //local to object
    private $name;
    private $branch;
    //Object Independent -> shared field
    private static $studentCount = 0;
    const PI = 3.14;

    //constructor function
    public function __construct($name, $branch) {
        $this->name = $name;
        $this->branch = $branch;
        Student::$studentCount += 1;
        //add new property/field in object
        $this->PI = 100; 
    }

    public function getDetails(){
        return "My name is $this->name and branch is $this->branch";
    }

    public static function getStudentCount(){
        return Student::$studentCount;
    }
}

echo Student::PI . PHP_EOL; //can't modify the constant value
//Person object creation

$student1 = new Student('Mahesh', 'C.S.E');
echo $student1->PI . PHP_EOL;
echo $student1->getDetails() . PHP_EOL;
echo Student::getStudentCount() . PHP_EOL;

$student2 = new Student('Suresh', 'M.E');
echo $student2->getDetails() . PHP_EOL;
echo Student::getStudentCount() . PHP_EOL;
