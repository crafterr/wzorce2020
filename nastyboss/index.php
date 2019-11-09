<?php

use wzorce\nastyboss\NastyBoss;
use wzorce\nastyboss\Minion;
use wzroce\nastyboss\ClueUp;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$boss = new NastyBoss();
//minion - slugus
//clueup - pieniacz
//
$boss->addEmployee(new Minion("Adam"));
$boss->addEmployee(new ClueUp("Maciek"));
$boss->addEmployee(new Minion("Krzysiek"));

$boss->removeEmployee(2);

dump($boss);
