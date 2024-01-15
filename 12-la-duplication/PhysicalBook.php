<?php
class PhysicalBook
{
    public string $title;
    public string $author;
    public int $price;
    public int $weight;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $weight=0)
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->weight=$weight;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    public function printPhysicalBook():string
    {
        $string = "{$this->title}, {$this->author}, Weight : {$this->getWeight()}";
        return print $string;
    }

    public function getPriceAsCurrency(){
        return "$".$this->getPrice()/100;
    }
}