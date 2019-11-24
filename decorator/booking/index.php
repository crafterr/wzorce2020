<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\decorator\booking\rooms\SingleRoomBooking;
use wzorce\decorator\booking\rooms\DoubleRoomBooking;
use wzorce\decorator\booking\ExtraBed;
use wzorce\decorator\booking\Wifi;
$singleRoom = new SingleRoomBooking();
$doubleRoom = new DoubleRoomBooking();


dump($singleRoom->calculatePrice());

$extraBedForSingleRoom = new ExtraBed($singleRoom);

dump($extraBedForSingleRoom->calculatePrice());

$extraBedAndWifiRoom = new ExtraBed(new Wifi($singleRoom));

dump($extraBedAndWifiRoom->calculatePrice());
