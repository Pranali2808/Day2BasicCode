<?php
//PHP program to implement function overriding
 
 class Shape 
 {
 const PI1 = 3.142 ;
    function __call($name,$arg)//magic method for calling function
    {
   if($name == 'area')
   //count number of argument
     switch(count($arg)) 
     {
     case 0 : return 0 ;//for 0 argument
     case 1 : return self::PI1 * $arg[0] ;//for 1 argument
     case 2 : return $arg[0] * $arg[1];//for 2 argument
     }
   }
 }
 $obj= new Shape();
 $circle = $obj->area(3);
 echo "area of circle is : $circle \n";
 $rectangle = $obj->area(8,6);
 echo "area of rectangle is : $rectangle \n";
 ?>

