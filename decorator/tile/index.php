<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\decorator\tile\Plains;
use wzorce\decorator\tile\PollutionDecorator;
use wzorce\decorator\tile\DiamondDecorator;
use wzorce\decorator\tile\Forest;
$tile = new Plains();

dump($tile->getWealthFactor());


$tile  = new DiamondDecorator(new Plains());
dump($tile->getWealthFactor());

$t = new PollutionDecorator($tile);

dump($t->getWealthFactor());

$s = new PollutionDecorator(new DiamondDecorator(new Plains()));

dump($s->getWealthFactor());

$forest = new Forest();

$diamondForest = new DiamondDecorator($forest);

dump($diamondForest->getWealthFactor());

dump((new PollutionDecorator(new DiamondDecorator(new Forest())))->getWealthFactor());