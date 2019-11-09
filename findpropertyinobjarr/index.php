<?php

use wzorce\nastyboss\NastyBoss;
use wzorce\nastyboss\Minion;
use wzroce\nastyboss\ClueUp;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$person1 = new stdClass();
$person1->name = 'Adam';
$person1->surname = 'Pietras';
$person2 = new stdClass();
$person2->name = 'Maciek';
$person2->surname = 'Jaworski';
$person3 = new stdClass();
$person3->name = 'Grzysiek';
$person3->surname = 'Krawczuk';
$arr = [
    $person1,
    $person2,
    $person3
];

dump($arr);

$whatProperty = 'surname';
$searchValue = 'Jaworski';
$searchObj = array_filter(
    $arr,
    function ($e) use ($searchValue,$whatProperty) {
        return $e->{$whatProperty}===$searchValue;
    }
);

dump($searchObj);