<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

Example output:

6
12
18
24
…
48 
*/

for ($i = 2; $i < 50; $i += 2) {
    if ($i % 2 === 0 && $i % 3 === 0) {
        dump($i);
    };
};