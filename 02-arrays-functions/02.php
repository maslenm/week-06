<?php

require __DIR__ . "/vendor/autoload.php";


//Update hello so that it returns the string "hello name".


function hello($name) {
    // … your code here
    return "hello {$name}";
};

dump(hello("alice")); // "hello alice"
dump(hello("bob")); // "hello bob"