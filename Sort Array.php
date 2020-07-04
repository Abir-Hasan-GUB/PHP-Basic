<?php
$array = array('d','b','c','a');
$array1 = array(1,2,3,4,5,9,7,6,8);
sort($array);

print_r($array);
    //reverrse sort
echo "\n\n\n";
rsort($array1);
print_r($array1);

$array2 = [
    'a'=>'d','b'=>'b','d'=>'c','c'=>'a'
];

$array3 = [
    'a'=>'d','b'=>'b','d'=>'c','c'=>'a'
];
$array4 = [
    'a'=>'d','b'=>'b','d'=>'c','c'=>'a'
];

$array5 = [
    11,1,2,22,3,13,33,31,4,44,10
];

print_r($array2);
echo "\nAssociative array sort: \n\n";
sort($array2);
print_r($array2);
//with resarved key sort aray
echo "\nAssociative array sort: \n\n";
asort($array3);
print_r($array3);

//sort by pre define key;
echo "\nAssociative array sort use define key: \n\n";
sort($array5);
print_r($array5);
