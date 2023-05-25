<?php
require_once('ayudaMostrar.php');

function mostrarAcerca() {
    $contenido = '';
    if (isset($_REQUEST['nombre'])) {
        $nombre = $_REQUEST['nombre'];
        $contenido = "<p>Por: $nombre</p>";
    }
    
    $contenido = encabezado() .
            $contenido.
            "<p>TUDAI - QQn 2023</p>".pie();
    
    echo $contenido;
}
