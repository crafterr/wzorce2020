<?php

use wzorce\nastyboss\NastyBoss;
use wzorce\nastyboss\Minion;
use wzroce\nastyboss\ClueUp;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


use wzorce\observer\user\User;
use wzorce\observer\user\AddToMailSth;
use wzorce\observer\user\LoggerMail;
$user = new User();
$addtoMailSth = new AddToMailSth($user);
$loggerMail = new LoggerMail($user);
$user->attach($addtoMailSth);
$user->attach($loggerMail);
$user->changeEmail("adam@crafter.net.pl");