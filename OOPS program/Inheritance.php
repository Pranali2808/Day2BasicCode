<?php
//program for inheritance concept  
class first  
    {  
      
     public  function friend($name)  
        {  
            echo "friend name is $name \n";  
        }  
    }  
    class second extends first 
    {  
      public  function friendship()  
        {  
            echo "Best friend forever \n"; 
           
        }  
    }  
    $obj= new second(); //create object for second class 
    $obj->friendship();
    $obj->friend("Rohan");  //calling function of first class
?>  