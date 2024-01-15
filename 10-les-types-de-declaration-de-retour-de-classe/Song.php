<?php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * @param string $name
     * @param int $numberOfPlays
     */
    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}