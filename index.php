<?php
/**return/ declare/ goto */

/** Return: Stops the execution of where it is called from e.g */
//If in a function: it breaks out of the function
//if in a global scope, it terminates the whole program

/**DECLARE */

//ticks - useless in practice
// function onTick(){
//     echo 'Tick<br />';
// }
// register_tick_function('onTick');
// declare(ticks= 1);
// $i =0;
// $lenght = 10;
// while($i < $lenght){
//     echo $i++ .'<br/>';
// }

//strict_types -usefull
//forces the datatypes to be exact

declare(strict_types= 1);
function sum(int $a, int $b){
    return $a + $b;
}

echo sum(40,6);