<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once('util/acerca.php');
require_once('util/pi.php');
require_once('util/calculadora.php');
require_once('util/ayudaMostrar.php');

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

switch ($action) {
    case 'home':
        echo 'aaaaaaaaaaaaaaaaaa';
        home();        
        break;    
    case 'acerca':
        mostrarAcerca();
        break;
    case 'numeroE':
        mostrarNumeroE();
        break;
    case 'pi':
        mostrarPi();
        break;    
    default: {
            var_dump($action);
            $parametros = explode('/', $action);

            mostrarCalculo($parametros[1], $parametros[2], $parametros[0]);
        # code...
        }
        break;
}
