<?php
class Personne
{
    public $name = "John";
}

$personne = new Personne();
print $personne->name.PHP_EOL;
// Ici on accède à l'objet personne et on modifie la valeur
// de la propriété name
$personne->name="Jane";
print $personne->name.PHP_EOL;