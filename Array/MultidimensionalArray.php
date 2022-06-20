<?php
/*$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars[0][0]."      : In stock: ".$cars[0][1].", sold: ".$cars[0][2].". \n";
echo $cars[1][0]."        : In stock: ".$cars[1][1].", sold: ".$cars[1][2].". \n";
echo $cars[2][0]."       : In stock: ".$cars[2][1]." , sold: ".$cars[2][2].". \n";
echo $cars[3][0]." : In stock: ".$cars[3][1].", sold: ".$cars[3][2].". \n";
*/

$noOfRows = readline("Enter No. of Rows of Array");
$noOfColumn = readline("Enter No. of Columns of Array");

function createArray($noOfRows, $noOfColumn)
{
    $array = array();
    for ($i = 0; $i < $noOfRows; $i++) {
        for ($j = 0; $j < $noOfColumn; $j++) {
            $array[$i][$j] = readline("Enter value for position $i$j \n");
        }
    }
    return $array;
}
function displayArray($array, $noOfRows, $noOfColumn)
{
    for ($i = 0; $i < $noOfRows; $i++) {
        for ($j = 0; $j < $noOfColumn; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}
$myarray = createArray($noOfRows, $noOfColumn);
displayArray($myarray, $noOfRows, $noOfColumn);
?>
