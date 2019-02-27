<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$enteros=array(2,4,6,8,7,5,3,1);

echo "RECORRER Y MOSTRAR <BR>";
echo recorrerArray($enteros);

echo "<BR>";

echo "ORDENAR Y MOSTRAR <BR>";
sort($enteros);
echo recorrerArray($enteros);

echo "<BR>";
echo "MOSTRAR LONGITUD <BR>";

echo count($enteros);
echo "<BR>";echo "<BR>";
echo "BUSCAR EN EL ARRAY el numero pasado por get<BR>";

if (isset($_GET['numero'])){
    $busqueda=$_GET['numero'];
    echo "El numero a buscar es el $busqueda <BR>";

    $search= array_search($busqueda, $enteros);

    if (!empty($search)){
        echo "Existe en el indice $search";
    } else {
        echo "No existe";
    }
}

function recorrerArray($enteros){
    $cadena='';
    foreach ($enteros as $value) {
        $cadena .=  $value. "<BR>";    
    }
    return $cadena;
}
