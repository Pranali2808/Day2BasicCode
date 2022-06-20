<?php
/*
$id = array("Pranali"=> "1", "Rohan"=> "2");
echo "The Employee Pranali id is :  ".$id["Pranali"]."\n";
echo "The Employee Rohan id is :   ".$id["Rohan"]."."; 

$identity = array("Riya"=> "Honest", "Siya"=> "Beautiful", "Maya"=> "Clever");
echo "The Riya is :  ".$identity["Riya"]. "\n";
echo "The Siya is :  ".$identity["Siya"]. "\n";
echo "The Maya is :  ".$identity["Maya"]. "\n";
*/

function createarray(){
    $arr = array();
    $size =readline("Enter size of an Array: ");
    for($i=0;$i<$size;$i++){
            $key = readline("Enter key for $i \n");
            $value = readline("Enter value for $i \n");
            $arr[$key] = $value;
            }
    return $arr;

}
function displayArray($arr){
    echo "Elements of array are \n";
    foreach($arr as $key => $value){
        echo $key . " => " . $value . "\n";
    }
}
$myarray =createarray();
displayArray($myarray);
?> 