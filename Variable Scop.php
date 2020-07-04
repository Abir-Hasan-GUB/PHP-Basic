<?php

$name = "Earth";//global scope
function doSomthing(){
    global $name;//first method
    echo "$name";
    ///Second method//
    echo $GLOBALS ['name'];//using globel array.
}
 doSomthing();

//Static scope

function staticScope(){//static schope
    static $i; // static scope
    $i = $i ?? 0;
    $i+=2;
    echo "\n";
    echo "$i";
}
for ($i=0;$i<10;$i++){
    echo staticScope();
}
