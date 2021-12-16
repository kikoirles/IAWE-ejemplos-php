<?php
	$peso = 75;
	$altura = 1.70;

	$imc = $peso/($altura*$altura);
	echo "Tu indice de masa corporal es: $imc";

	if($imc > 20){
		echo "Te hace falta perder peso";}
	else{
		echo "Tu peso parece corecto con tu altura";}
