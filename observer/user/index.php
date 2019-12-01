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
$user = new User();
$addtoMailSth = new AddToMailSth($user);
$user->attach($addtoMailSth);
$user->changeEmail("adam@crafter.net.pl");