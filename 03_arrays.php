<?php
// Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// print_r($fruits);
// var_dump($numbers);
// echo $fruits[1];

//Associative Array
$colors = [
    1 => 'blue',
    2 => 'Red',
    3 => 'green',
    4 => 'yellow'
];
// echo $colors[2];

$hex = [
    'blue' => '#00f',
    'Red' => '0f0',
    'green' => 'f00'
];

// echo $hex['green'];

$person = [
    'first_name' => 'Ibrahim',
    'last_name' => 'Abiola',
    'email' => 'Abiola@yahoo.com'
];
// echo $person['last_name'];

$people = [
[
    'first_name' => 'Abiola',
    'last_name' => 'Wale',
    'email' => 'walex@yahoo.com'
],
[
    'first_name' => 'Kehinde',
    'last_name' => 'Adeola',
    'email' => 'Adeken@yahoo.com'
],
[
    'first_name' => 'Ibrahim',
    'last_name' => 'Abiola',
    'email' => 'Abiola@yahoo.com'
]
];

// echo $people[0]['last_name'];

var_dump(json_encode($people));