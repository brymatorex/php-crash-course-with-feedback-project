<?php
$fruits = ['apple', 'orange', 'pear', 'banana'];

//get length
// echo count($fruits);

//search array
// var_dump(in_array('apple',  $fruits));

//Add to array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'blueberry');
array_unshift($fruits, 'cashew', 'pineapple');

// print_r($fruits);

// Remove from array (from behind)

array_pop($fruits);

// Remove from array (from begining)
array_shift($fruits);

// Remove a specific fruit/obbect
// unset($fruits[4]);

//split it into chunks
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);
// print_r($fruits);

$arr1 =[1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'yellow', 'red'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) =>
$number <= 10);

// print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);

var_dump($sum);