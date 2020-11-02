<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Write some code that lists all multiples of 13 up to 1,000 using a for loop

Example output:

13
26
39
52
…
988
*/

for ($i = 13; $i < 1000; $i += 13) {
        dump($i);
};