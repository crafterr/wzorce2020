<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\factory\staticfactory\BookFactory;

$bookFactory = BookFactory::create("Moje przygody w krainie","Adam Pietras");

dump($bookFactory->toString());