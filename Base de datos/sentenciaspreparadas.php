<?php

	include_once('./conexion.php'); 

	//conectar a la bse de datos

	$conexion = conectarBD();

	$query = "INSERT INTO entrenador VALUES (?,?,?)";

	//preparamos la consulta almacenandola en la base de datos
	$consultaPreparada = mysqli_prepare($conexion, $query);

	$idEntrenador = 9; //en formulario cambiar por $_POST["id"]
	$nombreEntrenador = "Sam Cassel";
	$edadEntrenador = 56;

	//sustituir laos parametros de la consulta
	mysqli_stmt_bind_param($consultaPreparada,"isi",$idEntrenador,$nombreEntrenador,$edadEntrenador);

	// Ejecucion de la consulta 

	$resultado = mysqli_stmt_execute($consultaPreparada);

	echo "se han insertado".mysqli_stmt_affected_rows($consultaPreparada);

	echo "Se ha producido un error".mysqli_stmt_error($consultaPreparada);

	//creacion de una consulta con sentencias preparadas

	$parametroEdadEntrenador = 50;

	$query2 = "SELECT * FROM entrenador WHERE edad > ?";

	$consultaPreparada2 = mysqli_prepare($conexion,$query2);

	mysqli_stmt_bind_param($consultaPreparada2,"i",$parametroEdadEntrenador);

	mysqli_stmt_execute($consultaPreparada2);

	echo "la consulta ha devuelto ".mysqli_stmt_affected_rows($consultaPreparada2)." filas";

	$resultado2 = mysqli_stmt_get_result($consultaPreparada2);

	while ($fila = mysqli_fetch_assoc($resultado2)){
		echo "<br>";
		print_r($fila);
	}