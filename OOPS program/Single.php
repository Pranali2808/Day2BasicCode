<?php
//single level inheritance
class Numbers{
   
   public function add($first,$second)
    {
        echo "the first number in my list : $first \n";
        echo "The second number in my list : $second \n";
    }
}
   
    class LuckyNum extends Numbers{
      public  function odd($odd)
        {
            echo " odd number is : $odd \n";
        }

    }

$obj = new LuckyNum();
$obj->odd('7');
$obj->add('23','34');

?>
