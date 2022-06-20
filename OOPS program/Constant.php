<?php
class friend {
  const Message = "Best friend Forever";//declare a constant
  public function friendship() {
    echo self::Message;//access a constant from inside the class by using the self keyword
    // followed by the scope resolution operator 
  }
}

$goodbye = new friend();//create an object
$goodbye->friendship();//access method and properties
?>