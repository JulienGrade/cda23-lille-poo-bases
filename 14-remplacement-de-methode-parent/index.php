<?php
require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

$physicalBook = new PhysicalBook("First book", "John doe", 25, 5);
$digitalBook = new DigitalBook("Second book", "Jane doe", 15, 1048);
$book = new Book("Third book", "Toto", 18);


$physicalBook->printBook().PHP_EOL;
$digitalBook->printBook().PHP_EOL;
$book->printBook().PHP_EOL;



