<?php
$a = 5;
$b = 5;
if ($a>$b){
    echo "$a is bigger than $b";
}else if ($a==$b){
    echo "$a is Equal to $b";
} else
    echo "$a is smaller than $b";

//switch case///
switch ($a){
    case 5:
        echo "\nNumber is: $a";
}
echo PHP_EOL;
//alternative if else...
if ($a % 2 != 0):
    echo "$a is Odd Number";
    echo PHP_EOL;
    else:
        echo "$a is Even Number";
    endif;