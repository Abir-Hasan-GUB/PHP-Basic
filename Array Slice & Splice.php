<?php
$array = array("Abir","Nahid","Mim");

$newArray = array_slice($array,1);
print_r($array);
echo "\n";
print_r($newArray);

//pre reserved offset after slice
echo "\n With Preserve key: \n";
$newArray = array_slice($array,1,2,true);
print_r($array);
echo "\n";
print_r($newArray);

//array splice:::

$main_array=array('A','B','C','D','E');
echo "\nMain Array: \n";
print_r($main_array);
//after splice
$replaceORaddArray = array('NewAdd-1','NewAdd-2');
$spliceArray = array_splice($main_array,1,2,$replaceORaddArray);
print_r($spliceArray);
//after add main array:
echo PHP_EOL;
print_r($main_array);