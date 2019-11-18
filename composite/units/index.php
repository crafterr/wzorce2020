<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\composite\units\unit\Archer;
use wzorce\composite\units\unit\LaserCannonUnit;
use wzorce\composite\units\Army;
use wzorce\composite\units\unit\Maruder;

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


/*$arr = ['adam','marek','grzesiek'];

$index = array_search('marek',$arr,true);

array_splice($arr,$index,1,[]);
dump($arr);*/
