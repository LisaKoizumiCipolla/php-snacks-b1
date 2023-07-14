<?php

include_once __DIR__ . '/indumento.php';

class Scarpa extends Indumento {
    public $design;


function __construct(String $_material , String $_design){
    parent::__construct($_material);
    $this->design = $_design;
}
}

?>