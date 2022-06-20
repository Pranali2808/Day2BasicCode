<?php
//Program for swapping numbers
//taking input from user
$num1 = readline("Enter the number : ");
$num2 = readline("Enter the number : ");
if (is_numeric($num1) && is_numeric($num2)) //checking whether input is number or not
{ 
echo "Before swapping numbers are ";
echo "first Number =  $num1  and  second  number =  $num2 "; //print value of variable
$swap = $num1;//10
$num1 = $num2;//20
$num2 = $swap;//10
echo "\n";
echo "After swapping numbers are ";
echo "first Number =  $num1  and second number =  $num2 ";
}
else
{ echo "Invalid input";//display invalid message
}
?>