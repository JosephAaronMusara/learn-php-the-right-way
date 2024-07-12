<?php
/** variable, anonymous and arrow functions */

//call back: when a fxn is passed to another function as an arg and then called inside that fxn





$array =[1,2,3,4,5];
$array2 = array_map(function($element){
    return $element**2;
}, $array);

echo '<pre>';
print_r($array);
print_r($array2);
echo '<pre/>';
