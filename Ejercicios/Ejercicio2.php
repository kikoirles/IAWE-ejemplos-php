<?php

/*2. Juan y Miguel juegan al baloncesto en equipos diferentes. En los últimos tres partidos el equipo de Juan consiguió 89,120 y 103 puntos, mientras que el de Miguel consiguió 116, 94 y 123.*/

echo"*Ejercicio2 ";
echo"<br>";

/*   * Calcula la puntuación media de cada equipo */

echo"Medeia juan ";
/*$Punt_juan = [89,120,103];*/
$Punt_juan = [116,94,123];
$suma1 = 0;


/* parte de sacar media de equipo juan */
$suma1 = array_sum($Punt_juan);
$total1_numeros = count($Punt_juan);
$media1 = $suma1/$total1_numeros;
$media1 = array_sum($Punt_juan)/count($Punt_juan);
echo $media1;

echo"<br>";

/* sacar media de equipo miguel */
echo"Media miguel ";
$Punt_miguel = [116,94,123];
$suma2 = 0;

$suma2 = array_sum($Punt_miguel);
$total2_numeros = count($Punt_miguel);
$media2= $suma2/$total2_numeros;
$media2 = array_sum($Punt_miguel)/count($Punt_miguel);
echo $media2;

echo"<br>";

/* sacar media de equipo maria */
echo"Media maria ";
$Punt_maria = [97,134,105];
$suma3 = 0;

$suma3 = array_sum($Punt_maria);
$total3_numeros = count($Punt_maria);
$media3= $suma3/$total3_numeros;
$media3 = array_sum($Punt_maria)/count($Punt_maria);
echo $media3;

echo"<br>";
 /**Decide qué equipo tiene mejor media de puntuación e imprime el ganador por pantalla. Incluye en la salida también la media de puntuación del equipo.*/

 /** Cambia las puntuaciones para que cambie el ganador. No olvides tener en cuenta el posible caso de un empate (misma puntuación media).*/
 /* Nota MAX Devuelve los dos en caso de empate */

 /** María también juega al baloncesto y su equipo consiguió 97, 134 y 105 puntos. Como antes, registra en la consola el equipo de los tres que tenga mejor puntuación media.*/

echo "El ganador es "; 

$ganador = max($media1,$media2,$media3);

if ( $ganador == $media1){
     echo 'JUAN ';}
if ( $ganador == $media2 ){
    echo 'MIGUEL ';}
if ( $ganador == $media3 ){
    echo 'MARIA ';}

echo"<br>";
/* FORMA MAS RAPIDA EL EJERCICIO 2*/

 function suma_arrayjuan() {array_sum($Punt_juan);}
 function suma_arraymiguel() {array_sum($Punt_miguel);}
 function suma_arraymaria() {array_sum($Punt_maria);}

 function media_arrayjuan() {array_sum($Punt_juan)/count($Punt_juan);}
 function mdeia_arraymiguel() {array_sum($Punt_miguel)/count($Punt_miguel);}
 function media_arraymaria() {array_sum($Punt_maria)/count($Punt_maria);}


/** Forma mas rapida resumir todo lo anterior miguel angel*/
/*
 echo"<br>";


$mediasPuntuacion["Juan"]=$media1;
$mediasPuntuacion["Miguel"]=$media2;
$mediasPuntuacion["Maria"]=$media3;

$ganadores;
foreach ($mediasPuntuacion as $key => $winermedia) {

	if($winermedia==max($media1,$media2,$media3))
		array_push($ganadores, $key);
	# code...
}


echo "con una puntucaion de $ganador";

echo"<br>";
*/