<?php

require __DIR__ . "/vendor/autoload.php";

/* Create a function, joinWords, that takes two strings as arguments. The function should return the two strings joined together with a space in between. */


function joinWords($firstWord, $secondWord) {
    // … your code here
    return $firstWord . " " . $secondWord;
};

dump(joinWords("fish", "sticks")); // "fish sticks"
dump(joinWords("hello", "world")); // "hello world"
