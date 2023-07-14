<?php

include_once __DIR__ . '/indumento.php';

class Cappello extends Indumento {
    public $style;


function __construct(String $_material , String $_style){
    parent::__construct($_material);
    $this->style = $_style;
}
}

?>