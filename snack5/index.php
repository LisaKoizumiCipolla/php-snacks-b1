<?php

include_once __DIR__ . '/classes/cappello.php';
include_once __DIR__ . '/classes/scarpa.php';

$newIndumento = new Indumento('Asbestos');
$newCappello = new Cappello('Antrax', 'Elegant');
$newScarpa = new Scarpa('Adamantium', 'Boots');

var_dump($newIndumento);
var_dump($newCappello);
var_dump($newScarpa);

?>