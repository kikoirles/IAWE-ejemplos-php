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

function generarFormularioRegistro($action){

    echo "<form name='registro' action='".$action."' method='post'>

    		<div class='field col-lg-6 col-md-6 col-sm-12 col-xs-12'> 
            <label for='usuario'>Introduce tu nombre de usuario</label>
            <input class='field_custom' type='text' name='usuario' id='usuario'>
            </div>

            <div class='field col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <label for='pass'>Introduce tu contraseña</label>
            <input class='field_custom' type='password' name='pass' id='pass'>
            </div>

            <button type='submit'>Pulsa aquí</button>
        </form>";
}
