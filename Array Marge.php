<?php
$array1 = array('1','2','3','4','5','6');
$array2 = array('7','8','9');

$merge = array_merge($array1,$array2);
print_r($merge);

//use pluse signe:

$r1 = array_slice($array1,0,3,true);
$r2 = array_slice($array1,3,3,true);

$mrg = $r1 + $r2;
echo "\nAfter Use Plus Sign: \n";
print_r($mrg);