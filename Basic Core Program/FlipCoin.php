<?php
//Flip Coin and print percentage of Heads and Tails
// Initially using variable tails=0 and haed=0.
$tails = 0;
$heads = 0;
/**
 * Taking input from the user as how many times coin needs to be flipped.
 */
$number = readline('Enter number of times you want to flip coin: ');
if (is_numeric($number) && $number > 0) {   // checking for valid input
    for ($i = 0; $i < $number; $i++) {
        $random = (rand(1, 10)) / 10;     //Using rand function to get random number between 0.1-1.0
        if ($random < 0.5) {
            $tails += 1;
        } else {
            $heads += 1;
        }
    }
     /*
      Displaying Output as percentage of heads and tails
     */
    echo "Percentage of heads is " . round(($heads / $number) * 100,2) . " %" . "\n";
    echo "Percentage of tails is " . round(($tails / $number) * 100,2) . " %";
} else {
    echo "Please enter positive integer number";  // Message displaying to enter correct input
}

?>