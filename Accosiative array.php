<?php
//accosiative array
$foods = [
    'vagitable' => 'pumki,carrot,papia',
    'food' => 'orange,banana,strobery',
    'drinks' => '7UP,coca cola,fanda'
];

#echo"Vagitable: ". $foods['vagitable'];

//for each loop

foreach ($foods as $key => $value){
    echo $key ."=" . $value."\n";
}

//2nd way...
echo PHP_EOL;
echo PHP_EOL;

$keys = array_keys($foods); // get arrays key
echo print_r($keys); // print array

//3rd way...
echo PHP_EOL;
echo PHP_EOL;
$keys = array_values($foods);//get arrays value
echo print_r($keys);//print array
//print for loop using array keys.
echo PHP_EOL;
echo PHP_EOL;
echo "Print use for loop: \n\n";
$keys = array_keys($foods); // get arrays key
for ($i=0; $i<count($keys); $i++){
    echo $foods[$keys[$i]]."\n";//food=>keys=>value
}

//4th system

echo PHP_EOL;
echo PHP_EOL;
echo "Print use for loop: \n\n";
$keys = array_values($foods); // get arrays key
for ($i=0; $i<count($keys); $i++){
    echo $keys[$i]."\n";//food=>value
}
