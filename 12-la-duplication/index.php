<?php
require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

$physicalBook = new PhysicalBook("First book", "John doe", 25, 5);
$digitalBook = new DigitalBook("Second book", "Jane doe", 15, 1048);

print $physicalBook->getWeight().PHP_EOL;
print $digitalBook->getFileSize().PHP_EOL;

$physicalBook->printPhysicalBook();
$digitalBook->printDigitalBook();

print $digitalBook->getPriceAsCurrency() .PHP_EOL;
print $physicalBook->getPriceAsCurrency() .PHP_EOL;

