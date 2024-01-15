<?php

class Video
{
    public $name;
    public int $numberOfPlays;
    /**
     * Note de 0 à 5 3.5 acceptée
     * @var float|int
     */
    private float|int $rating;

    public function __construct($name, int $numberOfPlays)
    {
        $this->name=$name;
        $this->numberOfPlays=$numberOfPlays;
    }

    public function getRating():float|int
    {
        return $this->rating;
    }

    public function setRating(float|int $rating):void
    {
        // Si plus petit que 0, set à 0
        $rating = max(0, $rating);
        // Si plus grand que 5, set à 5
        $this->rating = min(5, $rating);
    }
}