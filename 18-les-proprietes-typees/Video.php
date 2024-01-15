<?php

class Video
{
    public $name;
    public int $numberOfPlays;

    public function __construct($name, int $numberOfPlays)
    {
        $this->name=$name;
        $this->numberOfPlays=$numberOfPlays;
    }
}