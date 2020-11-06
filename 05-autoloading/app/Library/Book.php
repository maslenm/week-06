<?php

declare(strict_types=1);

/* 
Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on. Put the following in index.php and then check that you get back the right results: 
*/
//set correct namespace for file & location
namespace App\Library;

//create class
class Book 
{
    //declare properties
    private $title;
    private $numberOfPages;
    //declare default property value of 1
    private $pagesRead = 1;

    //construct method with 2 parameters for new object instances
    public function construct__(string  $title, int $numberOfPages)
    //store values passed in as properties
    {
        $this->title = $title;
        $this->numberOfPages = $numberOfPages;
    }
    //function to return number of pages read. read method accepts $pages parameter and adds to pagesRead property value.
    public function read(int $pages)
    {
        $this->pagesRead += $pages;
        return $this;
    }
    //function to return current page by returning current total value of pagesRead
    public function currentPage()
    {
        return $this->pagesRead;
    }
};