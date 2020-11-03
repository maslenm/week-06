<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Create a function, squares, that takes an array of numbers as an argument. Return a new array containing the square of each number.

Try it using foreach
Try it using collect() (you'll need the illuminate/support package)
 */

// … your function here

//create function
function squares ($values) {
//create variable to store array
$squares = [];
    //iterate over each of the values as 'value'
    foreach ($values as $value) { 
        //set the squares variable to be the value squared
        $squares[] = $value * $value;
        
    };
    //return value 
    return $squares;
};





dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);
