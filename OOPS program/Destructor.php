<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 
        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }
        // Destructor
        function __destruct(){//executed after ending of script
            echo "I am destructing $this->name \n";
        }
    }
    $Rohan = new Employee("Rohan", 73000);
    $Soham = new Employee("Soham", 10000);
    $Rahul = new Employee("Rahul", 56000); 

    echo "The salary of Rohan is $Rohan->salary \n";
    echo "The salary of Soham is $Soham->salary \n";
    echo "The salary of Rahul is $Rahul->salary \n";
?>