<?php
$a = 5;
$b = 1;

function FindMaximum($a,$b){
    if($a>$b){
        echo "$a is Maximum Number";
    }
    else
        echo "$b is Maximum Number";
}

FindMaximum($a,$b);
