<?php
 
 include './funciones.php';

 $opciones = array("LOG OUT","PROFILE");
 generarHeader($opciones);
 echo "<h1>ID &nbsp &nbsp &nbsp &nbsp EXISTENCIA &nbsp PRECIO &nbsp &nbsp &nbsp &nbsp &nbsp DESCRIPCION<h1>";
 include('productos.php'); 

 generarCierre();

