<?php
class Computer
{
    public $name = "Macbook";
    public $price;

    public function getPriceFromEuroToCurrency($coefficient, $currencySymbol = '$')
    {
        // Nous avons donné une valeur par défaut à $currencySymbol
        return $this->price * $coefficient.$currencySymbol;
    }
}
$computer = new Computer();
$computer->price = 50000;
// Nouvelle écriture depuis php 8
$dollarComputerPrice = $computer->getPriceFromEuroToCurrency(coefficient: 1.08);
var_dump($dollarComputerPrice).PHP_EOL;
// Ici on écrase la valeur par défaut
$poundComputerPrice = $computer->getPriceFromEuroToCurrency(0.86, "£");
var_dump($poundComputerPrice).PHP_EOL;
