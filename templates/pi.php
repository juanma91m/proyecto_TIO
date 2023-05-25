<?php
require_once('ayudaMostrar.php');

function mostrarPi() {
    $contenido = encabezado() . 
    "<p>El numero Pi es 3.1415</p>".pie();

    echo $contenido;
}
