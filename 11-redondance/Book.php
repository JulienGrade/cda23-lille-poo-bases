<?php
class Book
{
    public string $title;
    public string $author;
    public int $price;
    public string $type;
    public int $weight;
    public int $fileSize;

    public function __construct(
        string $title,
        string $author,
        int $price,
        string $type,
        int $weight = 0,
        int $fileSize=0)
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
        $this->type =$type;
        $this->weight = $weight;
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
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @return string
     */
    public function getType():string
    {
        return $this->type;
    }

    // Ici nous avons géré la différence entre livre physique et digital
    // Mais on se rend bien compte que cela sera difficile à maintenir
    public function printBook():string
    {
        $string = "{$this->title}, {$this->author}, ";
        if($this->type === 'physical'){
            $string .= "Weight : {$this->getWeight()}";
        }elseif($this->type === 'digital'){
            $string .= "Filesize : {$this->getFileSize()}";
        }
        return print $string;
    }
}