<?php

//Definición de parámetros de acceso a la base de datos

define ("SERVIDOR","localhost");
define ("USUARIO","christian");
define ("PASSWORD","barcelona22");
define ("BASEDATOS","AdministracionPCRS");

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

function comprobarUsuario($usuario,$pass){
    $con = conectarBD();
    $sql = "SELECT pass FROM usuario WHERE nombre = ?";

    //Se prepara la sentencia 
    $sentencia = mysqli_prepare($con,$sql);

    //Se asocian los parámetros a la sentencia y se ejecuta la misma
    mysqli_stmt_bind_param($sentencia,"s",$usuario);
    mysqli_stmt_execute($sentencia);

    //Acceso a los resultados de la ejcución de la consulta
    $pass_cifrado;
    mysqli_stmt_bind_result($sentencia,$pass_cifrado);

    //Se mueve a la siguiente fila del conjunto de resultados, en este caso solamente uno.
    mysqli_stmt_fetch($sentencia);

    //Se comprueba que la contraseña sea correcta
    if (password_verify($pass,$pass_cifrado)){
        return true;
    }else{
        return false;
    }
}