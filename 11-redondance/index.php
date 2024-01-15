<?php
require_once "Book.php";

$physicalBook = new Book("First book", "John doe", 25, "physical");
$digitalBook = new Book("Second book", "Jane doe", 15, "digital");

print $physicalBook->getFileSize().PHP_EOL;
print $digitalBook->getWeight().PHP_EOL;

$physicalBook->printBook();
$digitalBook->printBook();

