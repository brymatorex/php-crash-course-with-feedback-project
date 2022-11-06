<?php
/* -----For Loop ---------*/

/*
**For Loop Syntax
 for (initialize; condition; increment) {
    // code to be executed
 }
 */

// for($x = 0; $x <= 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }

/* -----While Loop ---------*/

/*
**While Loop Syntax
 while (condition) {
    // code to be executed
 }
 */
// $x = 1;
// while($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x = $x + 1;
// }

/* -----Do While Loop ---------*/

/*
**Do While Loop Syntax
 do {
    // code to be executed
 } 
 while (condition) {
    // code to be executed
 }
 do...while loop will always execute the block of the code once, 
 even if the condition is false.
 */
// $x = 1;
// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }while($x <= 5);

/* -----Foreach Loop ---------*/

/*
**Foreach Loop Syntax
 foreach ($array as $value) {
    // code to be executed
 }
 */

 $posts = ['First Post', 'Second Post', 'Third Post'];

//  for($x = 0; $x < count($posts);$x++){
//     echo $posts[$x];
//  }

// foreach($posts as $post){
//     echo $post;
// }

// foreach($posts as $index => $post){
//     echo $index . ' - ' . $post . '<br>';
// }

// foreach($posts as $index => $post){
//     echo $index + 1 . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'Ibrahim',
    'last_name' => 'Adegoke',
    'email' => 'hibeedev@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}

