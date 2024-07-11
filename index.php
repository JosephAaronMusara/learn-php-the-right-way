<?php

//Control Statements
//if , else, elseif

$score = 45;
if($score>=85){
    echo "A";
}else{
    echo $score .' is not an A';
}
// $array = ['a'=>1, 'b'=>null];

// var_dump(array_key_exists("", $array)); //Tells you if the key ctually exists in the array
// echo '<pre>';

// var_dump(isset($array['b'])); //will tell you if the key exists and is not now
// echo '</pre>';

//Strings

//Heredoc - as if in "" - can have variables

// $x=1;
// $y= 2;

// $text = <<<TEXT

// Line $x
// Line $y
// Line 3
// TEXT;

// echo nl2br($text);

//Nowdoc - opposite - cant use variables in here, just like we cant with single quotes in normal strings
//The difference in syntax here is that here the idetifire must be wrapped in single quotes

// $text = <<<'TEXT'

// Line $x
// line $y
// line 3
// TEXT;

// //unset($text); - this destroys the variable

// echo nl2br($text);

//ARAYS
// $y =77;

// $x =$y ?? 'HELLO'; //x = hello only if y is null, else x = y
// var_dump($x);
