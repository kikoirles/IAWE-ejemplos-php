<?php

include "conexion.php";

//Formulario


//ejercicio 2 Funcion añade 5 años a mayores de 50 años

function aumentandoEdadCincuentones ($aumntoanyos){
	$conexion = conectarBD();
	$consulta = "pdate entrenador where edad>50 set edad=edad+$aumntoanyos";
	$resultado = mysql_query($conexion,$consulta);

		if ($resultado){
			echo "la edad de los entrenadores a sido actualizada";
}}

