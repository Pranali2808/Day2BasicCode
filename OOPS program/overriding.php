<?php
// PHP program to implement function overriding
//same function name  and number of arguments

class first{
     
    function my() {
        echo "Parent";
    }
}
 
class Child extends first {
     
    // Overriding method
    function my() {
        echo "\nChild";
    }
}
 
// Reference type of first
$p = new first;
 
// Reference type of child
$c= new Child;
 
// print first
$p->my();
 
// Print child
$c->my();
?>