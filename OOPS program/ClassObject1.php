<?php
class Player {
    // Properties
    public $name;
    public $speed = 5;
    
    function set_name($name){//method
        $this->name = $name;
    }
    
    function get_name(){//method
        return $this->name;
    }
}


$player1 = new Player();//creating object
$player1->set_name("Ishan :" );//setting name
echo $player1->get_name();//getting name
echo $player1->speed;//getting speed


$player2 = new Player();
$player2->set_name("\n Rohan \n");
echo $player2->get_name();

$player3 = new Player();
$player3->set_name("Rahul");
echo $player3->get_name();



?>