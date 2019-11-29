<?php
use wzorce\strategy\output\Client;
use wzorce\strategy\output\ArrayOutput;
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\strategy\dzialania\strategy\PlusCount;
use wzorce\strategy\dzialania\strategy\MinusCount;
use wzorce\strategy\dzialania\Dzialanie;
use wzorce\strategy\dzialania\strategy\MultipleCount;
$strategies = [
    new PlusCount(),
    new MinusCount(),
    new MultipleCount()
];
$mnozenie = new MultipleCount();
$dodawanie = new PlusCount();
for ($i = 0; $i<=10; $i++) {
    for ($j = 0; $j<=10; $j++) {

        $dzialanie = new Dzialanie($i,$j,$mnozenie);
        dump($dzialanie->count());
    }

}


