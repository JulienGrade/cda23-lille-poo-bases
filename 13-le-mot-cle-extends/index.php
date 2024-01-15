<?php
require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

$physicalBook = new PhysicalBook("First book", "John doe", 25, 5);
$digitalBook = new DigitalBook("Second book", "Jane doe", 15, 1048);

// Ici on utilise la méthode getAuthor du parent Book
print $physicalBook->getAuthor().PHP_EOL;
print $digitalBook->getAuthor().PHP_EOL;


print $digitalBook->getPriceAsCurrency() .PHP_EOL;
print $physicalBook->getPriceAsCurrency() .PHP_EOL;

