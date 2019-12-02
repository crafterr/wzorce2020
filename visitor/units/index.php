<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\visitor\units\unit\Archer;
use wzorce\visitor\units\unit\LaserCannonUnit;
use wzorce\visitor\units\Army;
use wzorce\visitor\units\unit\Maruder;

$unit1 = new Archer();
$unit2 = new LaserCannonUnit();
$unit3 = new Maruder();
$army = new Army();
$army->addUnit($unit1);
$army->addUnit($unit2);
$army->addUnit($unit3);

$army->removeUnit($unit2);

dump($army->__toArray());

dump($army->bombardStrength());

dump($army->textDump(1));


/*$arr = ['adam','marek','grzesiek'];

$index = array_search('marek',$arr,true);

array_splice($arr,$index,1,[]);
dump($arr);*/
