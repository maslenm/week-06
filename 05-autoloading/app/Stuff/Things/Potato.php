<?php

declare(strict_types=1);

/* 
Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times. Put the following in index.php and then check that you get back the right results:
 */

namespace App\Stuff\Things; 

class Potato 
{
    private $watered = 0;

    public function water() : void
    {
        $this->watered += 1;
    }

    public function hasGrown() : bool
    {
        return $this->watered >= 5;
    }
};
