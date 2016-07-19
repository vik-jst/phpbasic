<?php
$a=0;
$b=1;
echo $a." ";
echo $b." ";
for($i=0;$i<4;$i++)
{
$c=$a+$b;
$a=$b;
$b=$c;
echo $c ." ";
$d=$a+$b+$c-1;
}
echo "Sum is ".$d;
?>