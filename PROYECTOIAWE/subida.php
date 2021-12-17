<?php
 
 include './funciones.php';

 $opciones = array("LOG OUT","PROFILE");
 generarHeader($opciones);
 
 formularioCargaArchivos("subidafichero.php");
 generarCierre();