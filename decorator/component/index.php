<?php

use wzorce\decorator\component\ConcreteComponent as ConcreteComponentAlias;
use wzorce\decorator\component\ConcreteDecoratorComponent as ConcreteDecoratorComponentAlias;

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$my_component = new ConcreteComponentAlias();

dump($my_component->operation());

$my_component_decorated = new ConcreteDecoratorComponentAlias($my_component);

dump($my_component_decorated->operation());