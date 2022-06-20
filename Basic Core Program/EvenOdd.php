<?php 
//Program to find given input numbaer is even or odd 
//$num=28; 
/*
  Taking number to check even or odd as input from user.
 */
$num = readline('Enter Number to check even or odd: ');
if(is_numeric($num)){
    $temp = round($num); // to check input should not be decimal
    }
if (is_numeric($num) && $num >= 0 && $temp==$num) {
    if ($num == 0 || $num % 2 == 0) {
        echo $num . " is an Even Number"; // displaying even number
    } else {
        echo $num . " is an Odd Number"; // displaying odd number
    }
} else {
    echo "Please Enter Valid Input";//Display invalid input
}
?>  
