<?php

/**
 * A function for creating array 
 * taking paramter- Number of rows and number of columns
 */
function createArray($noOfRows, $noOfColumn)
{
    $array = array();//store all elements of array
    for ($i = 0; $i < $noOfRows; $i++) {//element position in row
        for ($j = 0; $j < $noOfColumn; $j++) {//element position in column
            $array[$i][$j] = readline("Enter value for position $i$j \n");
        }//taking input for element of array
    }
    return $array;
}

/**
 * A function for displaying array 
 * taking paramter- Array,Number of rows and number of columns
 */
function displayArray($array, $noOfRows, $noOfColumn)
{
    for ($i = 0; $i < $noOfRows; $i++) {
        for ($j = 0; $j < $noOfColumn; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}

//Taking input from user
$noOfRows = readline("Enter No. of Rows of Array");
$noOfColumn = readline("Enter No. of Columns of Array");

$myarray = createArray($noOfRows, $noOfColumn);
displayArray($myarray, $noOfRows, $noOfColumn);//display the output by calling method

?>