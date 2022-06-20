<?php
$Employee = array("Rohan","Soham","Amol");
$Id = array("1","2","3");

$new=array_combine($Employee,$Id);
array_push($new,"Sachin","Akshay");
array_push($new,"4","5");


array_pop($new);
print_r($new);
?>