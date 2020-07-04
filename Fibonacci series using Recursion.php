<?php

function fibonacci($start,$end){
    $start = 0;
    if ($start>$end){
        return;
    }
    $first = 0;
    $second = 1;
    echo " $first , $second ";
    for ($i= 2; $i<$end; $i++){
        $fibo= $first+$second;
        echo ", $fibo ";
        $first = $second;
        $second = $fibo;

    }
}

fibonacci(0,5);