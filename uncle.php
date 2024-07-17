<?php

require 'helper.php';
//Arrays
$items =['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>2];

//array_chunk splits the array into chuncks of specified sizes
nicePrint(array_chunk($items,2,true));//true is for key preservation

//array_combine combines 2 arrays, using the first 1 as keys and second as value and will throw an error of the number of elements in the arrays are not the same
$array1 = ['a','b','c','d'];
$array2 = [1,2,3,4];
nicePrint(array_combine($array1, $array2));

//destructuring
[$a, $b,,$c] = $array2;
echo "$a,$b,$c<br />----------------------------------------<br />";
//array_filter
$array = [1,2,3,4,5,6,7,8,9,10];
$even = array_filter($array,fn($num)=> $num % 2 ===0);//if you dont include a callback, it will just filter the false valuea
$even = array_values($even);
nicePrint($even);

//array_keys--- returns keys
$keys = array_keys($items);
nicePrint($keys);
$keys = array_keys($items,2);//this does loose comparison unless you pass in the third argument, true
nicePrint($keys);

//array_map
$mapped = array_map(fn($num, $num2) => $num * $num2,$array,$array2);
nicePrint($mapped);

//array_merge = merging arrays
$merged = array_merge($array1, $array2);
nicePrint($merged);

// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5']
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);

echo "$total <br />-------------------------------------------------<br />";


// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('a', $array);//case sensitive

if (in_array('a', $array)) {
  echo "Letter found <br />------------------------------------------------<br />";
}


$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

nicePrint(array_diff($array1, $array2, $array3));
nicePrint(array_diff_key($array1, $array2, $array3));
nicePrint(array_diff_assoc($array1, $array2, $array3));

//sorting
asort($items);//sort by values
nicePrint($items);
ksort($items);//sort by keys
nicePrint($items);
usort($items, fn($a, $b)=> $a <=> $b);//removes custom keys and adds numeric keys
nicePrint($items);