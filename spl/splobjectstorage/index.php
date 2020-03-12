<?php

use wzorce\nastyboss\NastyBoss;
use wzorce\nastyboss\Minion;
use wzroce\nastyboss\ClueUp;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$splStorage = new SplObjectStorage();

$object= new stdClass();
$object->name = 'adam';


$object2 = new stdClass();
$object2->name = 'grzesiek';

class myclass {
    public $name;


}
$object3 = new myclass();
$object3->name = 'krzysiek';

$splStorage->attach($object,'klasa pierwsza');
$splStorage->attach($object2,'klasa druga');
$splStorage->attach($object3,'klasa trzecia');

dump($splStorage);
foreach ($splStorage as $object) {
    echo $object->name.'<br />';
}