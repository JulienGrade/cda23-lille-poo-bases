<?php
require_once 'Counter.php';
require_once 'Connection.php';

// Le fait de passer la méthode getCount en static permet d'accéder
// au compteur sans instancier l'objet au préalable
print Connection::getCount().PHP_EOL;

$connection = new Connection();
$connection2 = new Connection();
print Connection::getCount().PHP_EOL;

$connection3 = new Connection();
print Connection::getCount().PHP_EOL;

// Ici nous ajoutons directement +20 au compteur de connexion,
// nous n'avons donc pas vraiment 23 connections, pour résoudre cela
// nous allons passer la propriété en privée
//Connection::$count += 20;//
// print Connection::$count.PHP_EOL;


