<?php

$array1 = array('Fname'=> 'Abir','Lname'=>'World');
echo "Main Array: \n";
print_r($array1);
// copy by value;

$array2 = $array1;
$array2['Lname']='Hasan';//chenge value in second array.
echo "\nCopid Array with edit: \n";
print_r($array2);

//NB: no effect in main array.

// now use copy by reference.
$array3 = array('One'=> '1','Two'=>'2');
echo "\nMain Arra 3:\n\n";
print_r($array3);

function chenged(&$array){ // use refferace variable.
    $array['Two']='Chenged';
    echo "\nChenged Array in Function: \n\n";
    print_r($array);
}

chenged($array3);
echo "\nAfter Function: \n\n";
print_r($array3);