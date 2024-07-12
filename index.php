<?php
/** variable, anonymous and arrow functions */

//anonymous: functions without names, end with a ; , can be stored in variables since they are expressions
// can use global variables though the use function

$num = 2;
$x = function (...$numbers) use ($num): int|float {
    $num +=12;
    echo "$num<br />";
    return array_sum($numbers);
};
echo $x(1, 2, 3).'<br />';
echo $num;