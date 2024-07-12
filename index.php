<?php
/** variable, anonymous and arrow functions */

//variable:

function sum(...$numbers):int|float{

    return array_sum($numbers);
}
$x='sum';

if(is_callable($x)){
echo $x(3,5,7,9,4,2); //in this case, $x is a variable, which is converted to the function
}else{
    echo 'not callable <br />';
}