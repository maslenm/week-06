<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Create a function, average, that takes an array of numbers as an argument. Return the average value of all the numbers.

Try it using foreach
Try it using collect()
 */

// … your function here

function average ($values) {

    $total = 0;

    foreach($values as $value) {
        $total += $value;
    }

    return ($total / count($values));
}

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);