<?php
use wzorce\strategy\output\Client;
use wzorce\strategy\output\ArrayOutput;
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use wzorce\strategy\behavioral\state\Person;
use wzorce\strategy\behavioral\state\Neutral;
$jan = new Person(new Neutral(),'Jan');
$jan->getName();
$jan->insult();
$jan->getName();

$jan->hug();
$jan->getName();

die();