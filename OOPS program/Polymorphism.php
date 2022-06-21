<?php 
//program for polymorphism concept 
class Shape  
{  
function draw(){}  
}  
class Circle extends Shape  
{  
function draw()  
{  
print "Circle has been drawn.\n";  
}  
}  
class Triangle extends Shape  
{  
function draw()  
{  
print "Triangle has been drawn.";  
}  
}  

   
$Val=array(1);  
  
$Val[0]=new Circle();  
$Val[1]=new Triangle();  

for($i=0;$i<2;$i++)  
{  
$Val[$i]->draw();  
}  
?>