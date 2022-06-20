<?php
//find the largest number among three  numbers
//$a = 10;
//$b = 20;
//$c = 30;
//taking input from user
$a = readline("Enter the number : ");
$b = readline("Enter the number : ");
$c = readline("Enter the number : ");
if (is_numeric($a) && is_numeric($b) && is_numeric($c)) //check input is number or not
{
if ($a > $b && $a > $c)
{
    echo " a is greater among 3 numbers";//display a is greater
}
elseif ( $b > $a && $b > $c)
{
    echo " b is largest among 3 ";//display b is greater
}
else
{
    echo " c is largest among 3";//display c is greater
}
}
else
{
    echo "Invalid Input";//display invalid input
}
?>