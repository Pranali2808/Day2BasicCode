
<?php

//problem-1

$eq = fn ($x, $y) => $x == $y;//assign arrow function to variable

echo $eq(100, '100'); // call arrow function by variable op = 1


//problem-2

$list = [10, 20, 30];

$results = array_map(fn ($item) => $item * 2, $list);
//array_map() function applies the arrow function to every element & return new array with result
print_r($results);



?>