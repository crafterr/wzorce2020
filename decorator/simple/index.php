<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use wzorce\decorator\simple\Textarea;
use wzorce\decorator\simple\TextAreaDecorator;
$textarea = new TextArea('opis');

echo $textarea->render();

$textareaDecorator = new TextAreaDecorator($textarea);
echo $textareaDecorator->render();