<?php

function encabezado()
{
    $encabezado = "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Calculadora</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        </head>
        <body>
            <h1>Calculadora</h1>";

    return $encabezado;
}

function pie()
{
    $pie = "<a href=\"".BASE_URL."\">Volver</a> 
            
        </body>
        </html>";

    return $pie;
}

function home()
{
    $contenido = encabezado() .
        "<ul>
            <li><a href=\"pi\">Pi</a></li>
            <li><a href=\"acerca\">Acerca</a></li>
        </ul> 
        <form id=\"formulario\">
            <label>A:</label><input id=\"operadorA\" required type=\"text\" name=\"operadorA\"> 
            <label>B:</label><input id=\"operadorB\" required type=\"text\" name=\"operadorB\"> 
            <select name=\"operando\" id=\"operando\">
                <option value=\"suma\">Suma</option>
                <option value=\"resta\">Resta</option>
                <option value=\"divide\">Divide</option>
                <option value=\"multiplica\">Multiplica</option>
            </select>
            
            <button type=\"submit\">Enviar</button>
        </form>
        <div id=\"divResultado\"></div>
        <script src=\"js/main.js\"></script>
    </body>
    </html>";

    echo ($contenido);
}
