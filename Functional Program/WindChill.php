<?php
 /* Note: the formula is not valid if t is larger than 50 in absolute value 
 * or  if v is larger than 120 or less than 3 
 * (you may assume that the values you get are in that range).
 */
//Function to calculate windchill
 function windChill()
{
// Taking input from the user
    $temp = readline("Enter Temperature : ");
    $speed = readline("Enter wnd Speed : ");
    if ($temp < 50 && $speed > 3 && $speed < 120) //set the condition as per given range
    {
        $w = 35.74 + (0.62158 * $temp) + (((0.4275 * $temp) - 35.75) * (pow($speed, 0.16)));//formula for wind chill
        echo "Wind Chill is : $w \n";
    }
    else
    {
        echo "Please enter valid input";//display invalid input
    }
}
windChill();

?>