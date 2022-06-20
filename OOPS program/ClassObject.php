<?php
class Player {
    // Properties
    public $name;
    public $speed = 5;
    // Methods
    function set_name($name){
        $this->name = $name;
    }
    
    function get_name(){
        return $this->name;
    }
}

echo "Lets understand OOPs Object Concept \n";
$player1 = new Player();//creating object
$player1->set_name("Ishan");//setting name
echo $player1->get_name();//getting name
echo "\n";
echo $player1->speed;//getting speed
echo "\n";

$player2 = new Player();
$player2->set_name("Rohan");
echo $player2->get_name();
echo "\n";
$player3 = new Player();
$player3->set_name("Rahul");
echo $player3->get_name();
echo "\n";


?>