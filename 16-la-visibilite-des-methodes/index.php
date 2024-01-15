<?php
require_once 'BaseClass.php';
require_once 'Subclass.php';

$baseObject = new BaseClass();
$subObject = new Subclass();

// Ici on accède à une propriété publique depuis la classe elle-même
print $baseObject->publicProperty;

// Ici on accède à une propriété publique depuis une classe enfant
print $subObject->publicProperty;

// Ici cette ligne renverra une erreur, car la propriété est protégée donc pas accessible ici.
// Il nous faut un accesseur, un getter
//print $baseObject->protectedProperty;
print $baseObject->getProtectedProperty().PHP_EOL;

// Ici nous accédons à la propriété protégée depuis la sous classe ou classe enfant
print $subObject->getParentProtectedProperty().PHP_EOL;

// Cette ligne renverra une erreur car une propriété privée
// n'est pas accessible hors de sa classe, nous allons devoir implémenter
// un getter ou accesseur
//print $baseObject->privateProperty;
print $baseObject->getPrivateProperty().PHP_EOL;

// Ici on accède à la propriété privée grâce au getter de la classe parent
print $subObject->getParentPrivateProperty().PHP_EOL;