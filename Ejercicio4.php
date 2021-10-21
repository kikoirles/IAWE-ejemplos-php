<?php

/*4. Crea una función que reciba tres parámetros (nombre de producto, precio e impuesto en porcentaje sobre 100). La función hará lo siguiente:

   * Los parámetros deberán tener un valor por defecto por si no los recibe que deben ser: "Producto genérico", 100 y 21.
   * Si los números no son válidos (NaN) muestra un error. Si son válidos, muestra por consola el nombre del producto y el precio final contando impuestos.*/

$arrayproductos=0;
$preciofinal=0;
$producto=0; 
$precio=0; 
$impuesto=0;

function producto_valido ($producto, $precio, $impuesto){
	if ($producto = null){
        echo "NaN";}
    elseif ($precio = null){
    	echo "NaN";}
    elseif ($impuesto > 100 and $impuesto < 0){
    	echo "NaN";}
    else $preciofinal=($precio+($precio*$impuesto/100));

    return $preciofinal;}

$arrayproductos;

 foreach ($_POST as $clave => $valor){
    echo "$clave es: $valor <br>";}
    $arrayproductos = producto_valido ($producto,$precio,$impuesto);
  


echo "<br>";
echo "Precio final ";
print_r ($arrayproductos);
