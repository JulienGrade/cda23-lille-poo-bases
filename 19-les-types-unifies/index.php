<?php
require_once 'Video.php';
require_once 'VideoPlaylist.php';

$video= new Video("Tuto", 6543);
$video->setRating(2.5);
print $video->getRating().PHP_EOL;


