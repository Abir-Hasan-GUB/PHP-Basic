<?php

function sum($n1,$n2){
    $sum = $n1 + $n2;
    echo "Sum is: $sum";
}


function factorial($n){

    if(gettype($n) != "integer"){//gettype funtion for check integer
        return "invalid";
    }

    $result = 1;
    for($i=$n; $i>1;$i--){
        $result = $result * $i;
    }
    return $result;
}

function serve($foodType,$numberOfItem="1 CUP"){
    echo "{$numberOfItem} of {$foodType} has been served";
}

function sumattion(int $a,int $b):int{
    return $a+$b;
}

echo"\n". sumattion(10,20);

//multiple element receve in function
function multipleSum(int ...$n){
    $result = 0;
    for($i = 0; $i<count($n); $i++){
        $result += $n[$i];
        
    }
    return $result;
}

echo "\nsum of series:".multipleSum(10,20,10);

/// Spilt a funtion into small sub function

function A(){
    echo "\n A work done";
}


function B(){
    echo "\n B work done";
}

function C(){
    echo "\n C work done";
}

function Learge(){
    A();
    B();
    C();
}

Learge();