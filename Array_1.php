<?php
$students = array(
    "abir",
    "nahid",
    123,
    "mim",
    "Pintu"
);
echo $students[1];
echo PHP_EOL;

$names = ["A","B","C"];
//alwyes arrray modify before count array element.
array_shift($names);// remove a element frome first of array
array_pop($names);// remove a element frome last of array
$m = count($names);
echo "\nNames:: \n";

for ($i=0; $i<$m; $i++) {
    echo "Index $i: " . $names[$i] . "\n";
}


echo PHP_EOL;

echo "\nLength are: ".count($students);
$n = count($students);
echo PHP_EOL;
for ($i=0; $i<$n; $i++){
    echo "Index $i: ".$students[$i]."\n";
}

echo "\nReverse order: \n";

for ($i=$n-1; $i>=0; $i--) {
    echo "Index $i: " . $students[$i] . "\n";
}