<?php
use wzorce\strategy\output\Client;
use wzorce\strategy\output\ArrayOutput;
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$markers = [
    new \wzorce\strategy\question\mark\RegexpMarker("pi./"),
    new \wzorce\strategy\question\mark\MatchMarker("pięć"),
    new \wzorce\strategy\question\mark\SimpleMarker(2)
];

foreach ($markers as $marker) {
    print get_class($marker)."<br />";
    $question = new \wzorce\strategy\question\TestQuestion("Ile boków ma pięciobok?",$marker);
    foreach (["pięć","cztery"] as $response) {
        print " odpowiedź: $response";
        if ($question->mark($response)) {
            print "dobra odpowiedz <br />";
        } else {
            print "pomylka <br />";
        }
    }
}