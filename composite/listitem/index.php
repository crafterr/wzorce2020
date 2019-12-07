<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use wzorce\composite\listitem\BannanaItem;
use wzorce\composite\listitem\AppleItem;
use wzorce\composite\listitem\FruitList;
use wzorce\composite\listitem\VegetableList;
use wzorce\composite\listitem\CarrotItem;

$basketOfFruit = new FruitList("Koszyk owoców",new DateTime());
$basketOfFruit->addItem(new BannanaItem('Banan',new DateTime()));
$basketOfFruit->addItem(new AppleItem('Jablko',new DateTime()));


$basketOfVegetable = new VegetableList("Koszyk warzyw",new DateTime());
$basketOfVegetable->addItem(new CarrotItem("Marchewka",new DateTime()));

dump($basketOfFruit);
dump($basketOfVegetable);

