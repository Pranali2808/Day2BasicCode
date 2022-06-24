<?php
//multilevel inheritance
class SuperClass
{
   public function firstname($name)
    {
      echo "My first name is : $name \n";
    }
}
class SubClass1 extends SuperClass{
  public function middlename($name)
    {
        echo "My middle name is : $name \n";
    }
}
class Subclass2 extends SubClass1{
   public function lastname($name)
    {
        echo "My last name is : $name  \n ";
    }
}

$obj = new SubClass2();
$obj->firstname("Pranali");
$obj->middlename("Sanjay");
$obj->lastname("Rane");

?>