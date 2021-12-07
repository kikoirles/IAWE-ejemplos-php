<?php

//Definición de parámetros de acceso a la base de datos

define ("SERVIDOR","localhost");
define ("USUARIO","christian");
define ("PASSWORD","barcelona22");
define ("BASEDATOS","bd_ejemplo");

function conectarBD(): mysqli | false {
    $conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BASEDATOS);

    if (!$conexion){
        echo "Se ha producido un error en la conexión";
        return false;
    }

    return $conexion;
}

function desconectarBD ($conexion){
    mysqli_close($conexion);
}

