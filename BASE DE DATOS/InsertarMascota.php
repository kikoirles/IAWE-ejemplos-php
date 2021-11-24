<?php

	include_once ('./funciones.php');

	print_r($_POST);

	//Conseguimos el nombre de la mascota
	$nombreMascota = $_POST['nombremascota'];

	//Conseguimos el id del equipo a partir de su nombre 
	$idEquipo =saberIdEquipo($_POST['seleccionequipo']);



