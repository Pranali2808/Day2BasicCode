<?php
  // PHP program to implements encapsulation
class Customer {
  
    private $userId;//declare variable as a private
    private $pwd;
      
    //function to Update password
    public function updatePwd($userId, $pwd) {
          echo("Function to update password '" . $pwd . "' for user " . $userId ."/n");
           }
    // function to get details 
    public function Details($userId) {
        
        echo("Function to get details of user "
                . $userId);
          
        echo "/n";
    }
}
  
$obj = new Customer();
$obj -> updatePwd('12345', '25');
$obj -> Details('06');
  
?>
