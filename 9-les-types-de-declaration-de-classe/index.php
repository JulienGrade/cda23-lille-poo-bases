<?php
// Les différents types :
// boolean
// integer
// float
// string
// object
// resource
// array
// null

// Permet les types stricts, exemple un int ne sera pas interprété
// en string
declare(strict_types=1);
require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist();
$song1 = new Song("Yesterday", 2765);
$song2 = new Song("Blackbird", 7654);

$playlist->addSong($song1);
$playlist->addSong($song2);
foreach($playlist->songs as $song){
    print $song->name.PHP_EOL;
}