<?php
require_once('matematica.php');
require_once('ayudaMostrar.php');

function calcularResultado($operadorA, $operadorB, $operacion) {

    switch ($operacion) {
        case 'suma':
            $resultado = suma($operadorA, $operadorB); 
            break;
        case 'resta':
            $resultado = resta($operadorA, $operadorB);
            break;
        case 'multiplica':
            $resultado = multiplica($operadorA, $operadorB);
            break;
        case 'divide':
            $resultado = divide($operadorA, $operadorB);
            break;
        default:
            $resultado = "Operacion no encontrada <b>$operacion</b>";
            break;
    }

    return $resultado;    
}

function mostrarCalculo($operadorA, $operadorB, $operacion) {
    $calculo = calcularResultado($operadorA, $operadorB, $operacion);
    
    echo $calculo;
}