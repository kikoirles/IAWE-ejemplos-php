<?php

print_r($_POST);

// Genera un formulario para poder insertar y obteniendo los datos mediante el método post almacena los registros en la base de datos.

$Cod_jugador = $_POST['codigo_jug'];
$Nombre = $_POST['nombre'];
$Posicion = $_POST['posicion'];
$Peso = $_POST['peso'];
$Fecha_nacimiento = $_POST['fecha_nac'];
$Codigo_equipo = $_POST['codigo_eq'];


// conecxion basede datos
$conexion = mysqli_connect("localhost","christian","barcelona22","bd_ejemplo");

if ($conexion != false){
    echo "<br>La conexión se ha realizado de forma correcta</br>";
}else{
    echo "<br> Ha habido un problema al conectar a la base de datos.";
}


// inserción de datos a MySQL desde PHP accedindo a html
$query="INSERT INTO jugador VALUES ($Cod_jugador, '$Nombre', $Posicion, $Peso, $Fecha_nacimiento, $Codigo_equipo)";
$resultado = mysqli_query($conexion,$query);

if($resultado) {
	echo "<br>se han introducido los datos correctamente </br>";}
else{
	echo "<br>La insercion ha fallado </br>";}

