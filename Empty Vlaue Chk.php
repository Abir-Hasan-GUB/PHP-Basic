<?php
$name = "Abir";
if (isset($name)){
    echo "Value is Set...";
}else
    echo "Vale is not set..";

// effective system
echo PHP_EOL;
if (isset($name) && is_numeric($name) || $name != ''){
    echo "Name is set";
}else
    echo "Name is not set";