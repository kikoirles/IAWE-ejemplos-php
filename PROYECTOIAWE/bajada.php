<?php
    include_once ("./funciones.php");

 $opciones = array("LOG OUT","PROFILE");
 generarHeader($opciones);

 listFiles("/home/christian/Documentos/htdocs/htdocs/IAWE-ejemplos-php/PROYECTOIAWE");

 
 echo" <a href='./DATOSEMPRESA.txt'>DATOS EMPRESA</a>";

 
 generarCierre();

