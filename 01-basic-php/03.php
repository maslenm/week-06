<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Write some code that lists the numbers from 1 to 100 using a for loop.

Example output:

1
2
3
4 
…
100
*/

for ($i = 1; $i <= 100; $i += 1) {
    dump($i);
}