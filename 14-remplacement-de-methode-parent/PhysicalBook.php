<?php
require_once 'Book.php';
class PhysicalBook extends Book
{
    public int $weight;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $weight=0)
    {
        parent::__construct($title, $author, $price);
        $this->weight=$weight;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    public function printBook():string
    {
        $string = "{$this->title}, {$this->author}, Weight : {$this->getWeight()}";
        return print $string;
    }
}