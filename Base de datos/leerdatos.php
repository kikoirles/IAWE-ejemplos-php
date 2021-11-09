<?php
	
	include_once ("./funciones.php");
	
	$usuario = $_PSOT["usuario"];
	$password = $_POST["pass"];

	$con = conectarBD();
	$sql = "SELECT password FROM usuario WHERE nombre = ?";

	$sentencia = mysqli_prepare($con,$sql);

	mysql_stmt_bind_param($sentencia,"s",$usuario);

	mysqli_stmt_execute($sentencia);

	$pass_cifrado;
	mysqli_stmt_bind_result($sentencia,$pass_cifrado);

	mysql_stmt_fecht($sentencia);

	if (password_verify($pass,$pass_cifrado))
		echo "La contraseña se ha validado";

	//Otro modo de aaceder a los resultados de la consulta
	/*$resultado = mysqli_stmt_get_result($sentencia);

	$fila = mysql_fetch_assoc($resultado);

	echo $fila["pass"]."<br>";

	if (password_verify($pass, $fila["password"]))
		echo "La contraseña es corecta";

	*/