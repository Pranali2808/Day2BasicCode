<?php
//program for inheritance concept  
class first  
    {  
        function friend()  
        {  
            echo "Rahul";  
        }  
    }  
    class second extends first 
    {  
        function friendship()  
        {  
            echo "Best freind forever";  
        }  
    }  
    $obj= new second(); //create object for second class 
    $obj->friend();  //calling function of first class
?>  