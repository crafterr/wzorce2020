<?php


require __DIR__.'/../../vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\strategy\duck\strategy\AdvanceQuack;
use wzorce\strategy\duck\strategy\CityDuck;
use wzorce\strategy\duck\strategy\SimpleDisplay;
use wzorce\strategy\duck\strategy\FastFly;
use wzorce\strategy\duck\strategy\SimpleQuack;
use wzorce\strategy\duck\strategy\RoboDuck;
use wzorce\strategy\duck\strategy\NoFly;
$cityDuck = new CityDuck(new SimpleDisplay(),new FastFly(),new SimpleQuack());

echo $cityDuck->quack();
echo $cityDuck->fly();
echo $cityDuck->display();

$roboDuck = new RoboDuck(new SimpleDisplay(), new NoFly(), new AdvanceQuack());

echo $roboDuck->quack();
echo $roboDuck->fly();
echo $roboDuck->display();