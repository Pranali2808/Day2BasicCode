<?php
/*$games = array("Cricket","Tennis","Carom");
echo "The games are  " . $games[0] . "," . $games[1] . " and " . $games[2] . "." ;

$number = array("2345", "4567", "5678");
echo "The numbers are " . $number[0] . " , " . $number[1] . " and " . $number[2] . "." ;
*/
function createArray(){
    $array = array();
    $size = readline('Enter size of the Array:');
    for($i=0;$i<$size;$i++){
        $array[$i] = readline("Enter $i value of array \n");
    }
    return $array;
}

function displayArray($array){
    echo "Elements of array are \n";
    for($i=0;$i<count($array);$i++){
        echo $array[$i] . " ";
    }
}

$myarray = createarray();
displayarray($myarray);
?>