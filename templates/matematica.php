<?php

function suma($a, $b) {
    return $a + $b;
}

function multiplica($a, $b) {
    return $a * $b;
}

function resta($a, $b) {
    return $a - $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return 'No se puede';
    }
    
}