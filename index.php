<?php
/** variable, anonymous and arrow functions */

//call back: when a fxn is passed to another function as an arg and then called inside that fxn

$sum = function (callable $callback, int|float ...$numbers): int|float {
    return $callback(array_sum($numbers));
};

echo $sum(function ($element){
    return $element * 3;
},5,6,8);

