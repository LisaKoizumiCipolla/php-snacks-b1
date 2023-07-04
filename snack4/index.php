<?php

$numbers = [ 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8];

function numbersSlice ($array, $min, $max){
    if ((count($array) < $max) || ($min > $max)){
        return false;
    } else {
        $choosenOne = [];
         for ($i=$min ;$i < $max + 1 ; $i++){
            $choosenOne[] = $array[$i];
        }
        return $choosenOne;
    }
}

var_dump(numbersSlice($numbers, 0, 4));
