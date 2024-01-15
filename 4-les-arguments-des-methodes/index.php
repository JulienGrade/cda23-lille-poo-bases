<?php
class House
{
    public $name = "Pavillon";
    public $price;

    public function getDollarPrice($currencySymbol = '$')
    {
        // Nous avons donné une valeur par défaut à $currencySymbol
        return $this->price * 1.08.$currencySymbol;
    }
}
$house = new House();
$house->price = 50000;
$dollarHousePrice = $house->getDollarPrice();
var_dump($dollarHousePrice).PHP_EOL;
// Ici on écrase la valeur par défaut
$dollarHousePrice = $house->getDollarPrice("£");
var_dump($dollarHousePrice).PHP_EOL;