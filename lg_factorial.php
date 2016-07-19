<?php
class factorail_of_number
{
    public function get_number($number){
        $j=1;
        for($i=1;$i<=$number;$i++){
             $j=$j*$i;
        }
        return $j;
    }
}

$fact=new factorail_of_number();
echo "Factorial of number". " ".$fact->get_number('4');
?>