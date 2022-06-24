<?php
//Hierarchical inheritance

class Numbers
{
   public function add($num1,$num2)
   {
    $num3 = $num1 + $num2;
     echo "addition is: $num3 \n";
   }
}
 
class Integer extends Numbers
{
   public function write()
   {
    echo "Addition is done \n";
   }
}
 
class decimal extends Numbers
{
 public function read()
 {
    echo " the addition is completed";
 }
   
}

$num = new Integer;
$num->add('4','5');

$num =new decimal;
$num->add('10','20');

?>