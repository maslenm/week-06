<?php

require __DIR__ . "/vendor/autoload.php";

/* 
Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

Hint: PHP has an implode() function, which is similar to join() in JS
 */

// ... your classes here

class Address 
{
    private $street;
    private $postcode;
    private $town;

    public function __construct($street, $postcode, $town)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }
    
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    public function fullAddress() 
    {
        return ("{$this->street}" . ", " . "{$this->postcode}" . ", " . "{$this->town}");
        
    }

}; 

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");


//better answer to fullAddress:
/* 
public function fullAddress()
    {
        $parts = [$this->street, $this->postcode, $this->town];
        return implode(", ", $parts);
    }
 */

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"