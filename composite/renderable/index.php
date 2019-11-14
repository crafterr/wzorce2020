<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use wzorce\composite\renderable\Renderable;
use wzorce\composite\renderable\InputElement;
use wzorce\composite\renderable\TextElement;
use wzorce\composite\renderable\Form;
use wzorce\composite\renderable\Button;
use wzorce\composite\renderable\TextArea;

$form = new Form();
$form->addElement(new InputElement());
$form->addElement(new TextElement('adam ma kota'));
$form->addElement(new TextArea());
$form->addElement(new Button('Zapisz'));


echo $form->render();