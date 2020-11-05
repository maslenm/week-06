<?php

declare(strict_types=1);

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

    public function __construct(string $street, string $postcode, string $town)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }

    public function setStreet(string $street) : Address
    {
        $this->street = $street;
        return $this;
    }

    public function setPostcode(string $postcode) : Address
    {
        $this->postcode = $postcode;
        return $this;
    }
    
    public function setTown(string $town) : Address
    {
        $this->town = $town;
        return $this;
    }

    public function fullAddress() : string
    {
        $parts = array_filter([
            $this->street,
            $this->postcode,
            $this->town,
        ]);
        return implode(", ", $parts);
    }
}; 

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");


// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"