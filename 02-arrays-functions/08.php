<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Create a function, even, that takes a number as an argument. The function should return true if the number is even and false if it is odd.
 */


// … your function here

function even ($number) {
    return $number % 2 === 0 ? true : false;
};

dump(even(1)); // false
dump(even(2)); // true