<?php

use wzorce\nastyboss\NastyBoss;
use wzorce\nastyboss\Minion;
use wzroce\nastyboss\ClueUp;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


use wzorce\observer\login\Login;
use wzorce\observer\login\GeneralLogger;
use wzorce\observer\login\SecurityMonitor;
use wzorce\observer\login\AnotherLogger;
$login = new Login();


new GeneralLogger($login);
new SecurityMonitor($login);
new AnotherLogger($login);

$login->handleLogin('crafter','fender','127.0.0.1');