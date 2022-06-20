<?php
// user input for points x and y
$x = readline('Enter Value for X: ');
$y = readline('Enter Value for Y: ');
$pattern = "/^[0-9]{1}$/";

if (preg_match($pattern, $x) && preg_match($pattern, $y)) {//check input is valid or not
    $length = sqrt(($x * $x) + ($y * $y));//calculating distance between two points using formula
    echo "The distance between  ( $x , $y ) and origin (0, 0) is :" . round($length , 3);//rounding off till 3 decimal point
}        
else {
    echo "Invalid input";//display invalid input
}
?>