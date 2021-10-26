<?php

//Proceso de conexion a la base de datos 
$conexion = mysqli_connect("localhost","christian","barcelona22","bd_ejemplo");

if ($conexion = false){
	echo "<br> La conexion se ha realizado de forma correcta</br>";	}
else{
	echo "<br> Ha habido un problema al conectar a la base de datos.";}

//Ejemplo de lectura de datos a MYSQL desde PHP
$query = "SELECT * FROM entrenador";
$resultado = mysqli_query($conexion,$query);

while ($fila =mysql_fetch_array($resultado,MYSQLI_BOTH)){
	print_r($fila);
	echo "<br>";}

//Ejemplo de insercion de datos a MYSQL desde PHP
$query="INSERT INTO entrenador VALUES (8, 'Michael Jordan' ,54)";
$resultado = mysqli_query($conexion,$query);

if ($resultado){
	echo "<br> La insercion se ha realizado de forma correcta</br>";}
else{
	echo "<br> Ha habido un problema alejecutar la consulta";}

//proceso de desconexion de la base de datos 
if($conexion != false){
	mysql_close($conexion);}

