<?php
/*# Ejercicios Introducción a DHCP*/

/*1. Crea un script en PHP con dos variables numéricas, la primera indicará cuantas veces debemos imprimir el segundo por pantalla, pero en cada iteración muestra el valor anterior multiplicado por 2. Por ejemplo, si las variables valen 4 y 6 la salida será:  6 12 24 48 */

echo"*Ejercicio1 ";

$repeticiones=4;
$valor=6;


for ($i=1;$i<=$repeticiones;$i++){
    if($i<=$repeticiones){
        echo ($valor). " ";
        $valor = $valor*2;
    }
}

echo"<br>";

