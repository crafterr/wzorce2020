<?php

use wzorce\nastyboss\NastyBoss;
use wzorce\nastyboss\Minion;
use wzroce\nastyboss\ClueUp;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$alex = new \wzorce\abstracter\Animal\Lion('Alex');
$dino = new \wzorce\abstracter\Animal\Dog("Dino");
dump($alex->roar());
dump($dino->roar());