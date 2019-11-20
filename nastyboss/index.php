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
$adam = new Minion("Adam");
$boss->addEmployee($adam);
$maciek = new ClueUp('Maciek');
$boss->addEmployee($maciek);
$krzysiek = new Minion("Krzysiek");
$boss->addEmployee($krzysiek);
$andrzej = Minion::create("Andrzej");
$boss->addEmployee($andrzej);

//$boss->removeEmployee($maciek);
dump($boss->removeEmployee($andrzej));

//$boss->removeEmployee(2);

dump($boss->getEmployes());
