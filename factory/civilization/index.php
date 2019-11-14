<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\factory\civilization\TerrainFactory;

$factory = new TerrainFactory(
    new \wzorce\factory\civilization\sea\EarthSea(),
    new \wzorce\factory\civilization\plain\EarthPlain(),
    new \wzorce\factory\civilization\forest\EarthForest()
);

dump($factory->getSea());
dump($factory->getPlain());
dump($factory->getForest());

$factory = new TerrainFactory(
    new \wzorce\factory\civilization\sea\EarthSea(),
    new \wzorce\factory\civilization\plain\EarthPlain(),
    new \wzorce\factory\civilization\forest\EarthForest()
);

dump($factory->getSea());
dump($factory->getPlain());
dump($factory->getForest());