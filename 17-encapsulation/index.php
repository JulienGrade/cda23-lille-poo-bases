<?php
require_once 'Video.php';
require_once 'VideoPlaylist.php';

$youtubeVideos = new VideoPlaylist();

$video = new Video("Tuto", 4567);

$fakeVideo = "ce n'est pas une video mais une string";

// Avec la propriété videos de la classe VideoPlaylist en public
// Cela démontre le besoin d'encapsuler
// $youtubeVideos->videos[]=$video;
// $youtubeVideos->videos[]=$fakeVideo;

//var_dump($youtubeVideos->videos);

$youtubeVideos->addVideo($video);
$youtubeVideos->addVideo(new Video("Astuces", 654343));

var_dump($youtubeVideos->getVideos()).PHP_EOL;