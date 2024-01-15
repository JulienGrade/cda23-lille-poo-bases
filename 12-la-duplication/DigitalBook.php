<?php
class DigitalBook
{
    public string $title;
    public string $author;
    public int $price;
    public int $fileSize;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $fileSize=0)
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->fileSize=$fileSize;
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
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function printDigitalBook():string
    {
        $string = "{$this->title}, {$this->author}, Filesize : {$this->getFileSize()}";
        return print $string;
    }

    public function getPriceAsCurrency(){
        return "$".$this->getPrice()/100;
    }
}