<?php
// use delimenter for multiple array
$multiDiamantiona = [
    'Food' => explode(', ','Banana, Orange, Apple'),
    'Animal' =>explode(', ','Cat, Dog, Cow'),
    'Vagitable' => explode(', ','Bringal, Potato')
];
//now access split array element
print_r($multiDiamantiona);
echo"Print Particuler Element: ". $multiDiamantiona['Food'][0];

// add a element in array.
array_push($multiDiamantiona['Vagitable'],'Lady_Finger');

// now check update element of array.
echo "\n\n";
print_r($multiDiamantiona);

//now join a array into string;
$converToString = join(', ',$multiDiamantiona['Vagitable']);
//after join string is:
echo "\n\nJoined String: ".$converToString;


//Again use acociative arry..
$mult = [
    [1,2,3,4],
    [5,6,7,8],
    [0,10,20,23,[55,56,57,58]]
];

// now accase 57:
echo "\n\nMult Array: \n\n";
print_r($mult);
echo "\n Num: 58 is: ".$mult[2][4][3];