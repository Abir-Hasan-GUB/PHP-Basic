<?php
$names = ('abir,mim,nahid,pintu');//string
echo $names."\n";

//nao convert string to array

$nameAre = explode(',',$names);
print_r($nameAre);

// array element
echo "Array element: ".count($nameAre);

// find array from string where use more than one delimiter:
$food = ('Mango, orange,banana, potato');
echo "\n"."Foods : ".$food;
//convert string to array use multiple delimeter.

$foods = preg_split('/(, |,)/',$food);
echo "After use multiple delimeter: \n";
print_r($foods);

//Now array to string
$joined = join(',',$foods);
echo "\nAfter Joined Array is: ".$joined;
//array style array.
$array = array(
    'Abir',
    'Mim',
    'Nahid'
);
echo "\n\nReguler Array: \n";
    print_r($array);
    //now convert array to string
$convertToString = join(',',$array);
echo "After Join: ".$convertToString;