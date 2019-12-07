<?php
use wzorce\strategy\output\Client;
use wzorce\strategy\output\ArrayOutput;
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\strategy\painter\strategy\BluePainterStrategy;
use wzorce\strategy\painter\strategy\YellowPainterStrategy;
use wzorce\strategy\painter\HomePainter;

$strategies = [
  new BluePainterStrategy(),
  new YellowPainterStrategy()
];
$homepainter = new HomePainter($strategies);


foreach (['yellow','blue'] as $colours) {
    dump($homepainter->start($colours));
}

