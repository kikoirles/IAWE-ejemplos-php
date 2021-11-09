<?php

	include_once ("./funciones.php");
	$password = $_POST["pass"];
	$usuario = $_PSOT["usuario"];

	//creamos la consulta para ejecutar una sentencia preparada
	$consulta = "INSERT INTO usuario VALUES (?,?)";

	// ciframos la contraseña en texto plano que hemos recibido por html con el metodo POST
	$password_cifrado = password_hash($password,PASSWORD_DEFAULT);

	//Conectamos a la bse de datos y ejecutamos la consulta
	//$con = concectarBD();
	$sentencia = mysqli_prepare($con,$consulta);


	//Asignamos los datos a los parametros que hemos definido en la sentencia SQL
	mysqli_stm_bind_param($sentencia,"ss",$usuario,$password_cifrado);

	//Ejecutamos la insercion del usuario en la base de datos
	if (mysql_stmt_execute($sentencia))
		echo "Se he ejecutado correctamente la insercion";