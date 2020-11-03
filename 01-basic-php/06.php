<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Write some code that outputs a cumulative total of the current line number for 1 to 50.

e.g.

1
1 + 2
1 + 2 + 3
1 + 2 + 3 + 4
etc.
Example output:

1
3
6
10
...
1275
 */

$total = 0;

for ($i = 1; $i <= 50; $i += 1) {
    $total += $i;
    dump($total);
}