<?php

    function registerUser($email){
        echo $email . ' registered';
}

// registerUser('Ibrahim');

// function sum($n1, $n2) {
//     return $n1 + $n2;
// }

// $number = sum(5, 5);
// echo $number;


function sum($n1 = 4, $n2 = 4) {
    return $n1 + $n2;
}

$number = sum();
// echo $number;

$subtract = function($n1, $n2){
    return $n1 - $n2;
};
// echo $subtract(10, 4);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10, 4);