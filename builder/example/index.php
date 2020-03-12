<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use wzorce\builder\example\CarBuilder;
use wzorce\builder\example\Director;

$car = new CarBuilder();

$director = new Director();
$builder = $director->build($car);

dump($builder->getData()['LewePrzednie']);



