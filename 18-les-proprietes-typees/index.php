<?php
require_once 'Video.php';
require_once 'VideoPlaylist.php';

$videoTitles = ['Tuto', 'Astuces', 'Demo'];

// Ici on utilise l'index du tableau pour enregistrer la valeur
// la propriété name étant publique on peut même écraser cette valeur à la volée
//$video = new Video($videoTitles[0], 4354);
//$video->name = $videoTitles[1];

// Regardons ce qui se passe si on oublie de lui attribuer la valeur
// de cet index et que la propriété name n'est pas typée.
$video = new Video($videoTitles[0], 423423);
$video->name = $videoTitles;

