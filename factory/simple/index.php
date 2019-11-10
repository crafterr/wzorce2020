<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$bloggsCommsManager = new \wzorce\factory\simple\BloggsCommsManager();

echo $bloggsCommsManager->getHeaderText();
echo $bloggsCommsManager->getApptEncoder()->encode();
echo $bloggsCommsManager->getFooterText();


$megaCommsManager = new \wzorce\factory\simple\MegaCommsManager();

echo $megaCommsManager->getHeaderText();
echo $megaCommsManager->getApptEncoder()->encode();
echo $megaCommsManager->getFooterText();
