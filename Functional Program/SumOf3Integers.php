<?php
// user input for Array size and Elements
$size = readline('Enter Size of Array: ');

if (is_numeric($size) && $size > 0 && $size >= 3) {//check input is valid or not

	echo "Enter the Elements of Array: \n";
	
	for ($i = 0; $i < $size; $i++) {//entering all array element one by one
		$num = readline("Enter " . $i + 1 . "th element of an array \n");
		if (is_numeric($num)) {
			$array[$i] = $num;
		} else {
			echo "Enter valid input";
		}
	}
	/**
	 * Function to get sum of 3 integers adds to 0
	 * Running different loops for 3 Elements
	 * Returns the Distinct Triplets count
	 */
	function sumOf3IntAddsTo0($size, $array)
	{
		$count = 0;//initially count is zero
		for ($i = 0; $i < $size; $i++) {//loop execute foe 1st element
			for ($j = $i + 1; $j < $size; $j++) {//loop execute for 2nd element
				for ($k = $j + 1; $k < $size; $k++) {//loop execute for 3rd element
					if ($array[$i] + $array[$j] + $array[$k] == 0) {//check sum = 0 or not
						$count = $count + 1;
						echo "Distinct Triplets : " . $array[$i] . ", " . $array[$j] . " and " . $array[$k] . "\n";
					}    //display 3 elemnts of triplet
				}
			}
		}
		return $count;
	}
	echo "No.of Distinct Triplets: " . sumOf3IntAddsTo0($size, $array);//display no of triplet
} else {
	echo "Invalid size input ";
}
?>