<?php
//associative array.
$array = [
    'name' => 'Abir,nahid,mim',
    'food' => 'Banana, Orange, Apple'
];

print_r($array);
// serialize array data for save
$serialize = serialize($array);
echo "\n\n Serialize Data: \n{ $serialize }\n\n";
// now unserialize data and print again as to main array
$unserialize = unserialize($serialize);
echo "\nUnserialize Data: \n\n";
print_r($unserialize);

// use json for same work;
 $jesonSave = json_encode($array);
echo "\n\n JSON Data: \n{ $jesonSave }\n\n";

//now decode data:
$jesonDecode  = json_decode($jesonSave,true);//true for obj.
echo "\nAfter JSON Decode: \n\n";
print_r($jesonDecode);