<?php 
//Program to find given input is vowel or not
$x = readline("Enter alphabate : ");//taking input from user
if (preg_match("/[A-Za-z]{1}/", $x)) //Checking input is valid or not
{
if (
    $x == 'a' || $x == 'e' || $x == 'i' || $x == 'o' || $x == 'u' ||
    $x == 'A' || $x == 'E' || $x == 'I' || $x == 'O' || $x == 'U')
{
   echo "Vowel";
}
else
{
    echo "Consonant";
}
}
else{
    echo "Enter the valid Input";//display invalid message
}
?>
 
 