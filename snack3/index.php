<?php

$valar = ["Manwe" , "Irmo" , "Aule" , "Tulkas" , "Ulmo"];

$valier = ["Varda" , "Yavasna" , "Este" , "Vaire" , "Nienna"];

$couple = [];

for ($i=0; $i < count($valier); $i++) {
    array_push($couple, $valier[$i], $valar[$i]);
}

var_dump($couple);

?>
