<?php
    include_once('./assets/php/funciones.php');

    setcookie("nombreUsuario",$_SESSION['nombreUsuario'],time()+3600,"/pcrs.com","pcrs.com",false,false);

    setcookie("cookie2");

    generarEncabezadoHTML("Ejemplos de cookies para utilizar en PCRS");
?>