<?php
//Program for finding Quotient and Remainder of two numbers
//$a = 50;
//$b = 10;
$a = readline("Enter the number : ");
$b = readline("Enter the number : ");
if (is_numeric($a) && is_numeric($b)) //checking whether input is number or not
{ 
//calculate Quotient
$Quotient = $a / $b;
echo "Quotient of a & b is : $Quotient";//display quotient
//calculate Remainder
$Remainder = $a % $b;
echo "\n";
echo "Remainder of a & b is : $Remainder";//display remainder
}
else
{ echo "Enter correct input";// invalid input
}
?>