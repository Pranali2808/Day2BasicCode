<?php
   abstract class records//abstract class
    {
      abstract function printdata();//abstract method
      public function getdata() 
      {
         echo "College records";
      }
   }
   class student extends records{
      public function printdata(){
         echo "Good morning";
      }
   }
   $obj = new student();
   $obj->getdata();
?>