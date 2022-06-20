<?php
/**
 * Program for Stopwatch measuring the time that elapses between the start and end clicks
 */
// Use microtime() function to measure current time in miliseconds
//starting time
$time_start = microtime(true);

  $a = 3;
  $b = 5;
  $sum = $a + $b;
  echo $sum;
  echo "\n";
  
// Use microtime() function to measure ending time
$time_end = microtime(true);
  
// Time difference
$time = $time_end - $time_start;
  
echo "The speed of code = ".$time;
?>