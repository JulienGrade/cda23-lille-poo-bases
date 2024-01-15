<?php
require_once 'BaseClass.php';
require_once 'Subclass.php';

$baseObject = new BaseClass();
$subObject = new Subclass();

// Nous accédions à la valeur grâce à la méthode publique getProtectedProperty.
// Maintenant que cette méthode est protégée, cela renverra une erreur.
// print $baseObject->getProtectedProperty().PHP_EOL;

// Ici nous accédons à la propriété grâce à la méthode par le principe de l'héritage
print $subObject->getParentProtectedProperty().PHP_EOL;

