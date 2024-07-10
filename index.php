<?php

//Strings

//Heredoc - as if in "" - can have variables

$x=1;
$y= 2;

$text = <<<TEXT

Line $x
Line $y
Line 3
TEXT;

echo nl2br($text);

//Nowdoc - opposite - cant use variables in here, just like we cant with single quotes in normal strings
//The difference in syntax here is that here the idetifire must be wrapped in single quotes

// $text = <<<'TEXT'

// Line $x
// line $y
// line 3
// TEXT;

// //unset($text); - this destroys the variable

// echo nl2br($text);
