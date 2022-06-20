<?php
class Employee{
    //Proprties of class
    public $name;
    public $salary;
    /*Constructor without arguments
     function __construct(){
        echo "This is my constructor for employee";
     }
     */

    //Constructor with arguments
    function __construct($name1, $salary1){//passing 2 arguments
        $this->name = $name1;
        $this->salary = $salary1;
     }
    }

$Rohan = new Employee("Rohan", 73000);
$Soham = new Employee("Soham", 10000);
$Rahul = new Employee("Rahul", 56000); 

echo "The salary of Rohan is $Rohan->salary \n";
echo "The salary of Soham is $Soham->salary  \n";
echo "The salary of Rahul is $Rahul->salary  \n";
?>
