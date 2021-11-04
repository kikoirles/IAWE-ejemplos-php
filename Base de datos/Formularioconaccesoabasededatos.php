<?php

	include_once('./conexion.php'); 

?>

<html>
	<head>
		<title>Formulario con acceso a base de datos</title>
	</head>
	<body>
			<form action="" method="post">

			<label for="nombre">Introduce tu nombre</label>
			<input type="text" name="nombre" id="nombre"><br>

			<label for="contrasena">Introduce tu contraseña</label>
			<input type="password" name="contrasena" id="contrasena"><br>

			<label for="comunidad">Selecciona tu comunidad autonoma</label>
			<select name="comunidad">
				<?php
					//conectar a la bse de datos
					$conexion = conectarBD();
					//consulta para mostrar los datos
					$resultado = mysqli_query($conexion,"SELECT nombre FROM comunidades");
					//bucle que hace recorrer todos los datos de la sentencia recreada anteriormente
					while($fila = mysqli_fetch_assoc($resultado)){
						echo "<option>".$fila["nombre"]."</option>";
					}
				?>
			</select>
	</body>
</html>