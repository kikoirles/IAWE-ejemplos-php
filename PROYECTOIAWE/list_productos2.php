<?php
 
 include './funciones.php';

 $opciones = array("LOG OUT","PROFILE");
 generarHeader($opciones);
 
 include('productos.php'); 

 generarCierre();

