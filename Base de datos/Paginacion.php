<?php

	include_once('./conexion.php');
	define("registrosPagina",100); 


	$pagina = 1;

	//conseguimos el valor del numero de la URL pagina
	if (array_key_exists("pagina",$_GET)){
		$pagina = $_GET["pagina"];
	}

	//queremos saber el numero de registros que queremos mostrar
	$conexion = conectarBD();
	$resultado = mysqli_query ($conexion,"SELECT count(*) from municipios");


	$fila = mysqli_fetch_array($resultado, MYSQLI_NUM);
	$numeroRegistros = $fila[0];
	echo $numeroRegistros."<br>";


	$numeroPaginas = ceil($numeroRegistros / registrosPagina);
    echo $numeroPaginas."<br>";

	 $segmento = mysqli_query($conexion,"SELECT nombre FROM municipios LIMIT ".(($pagina-1)*registrosPagina) .",".registrosPagina);

	while ($fila= mysqli_fetch_assoc($segmento)){

	echo "<table border='1px solid'>";
		echo "<tr>".$fila["nombre"]."<tr>";
		echo "</table>";
	}

	for ($i=0;$i<$numeroPaginas;$i++){
		$enlace = '<a href="paginacion.php?pagina=';
		$enlace .=($i+1);
		$enlace .='">';
		$enlace .=($i+1);
		$enlace .="</a> |";
		echo $enlace;
	}
