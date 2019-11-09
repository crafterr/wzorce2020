<?php
use wzorce\strategy\output\Client;
use wzorce\strategy\output\ArrayOutput;
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$myoutput = new Client(new ArrayOutput());
dump($myoutput->loadOutput());
