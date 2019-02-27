<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numeros=array(0);

for ($i=0;$i<12;$i++){
    array_push($numeros, $i);
}
echo recorrerArray($numeros);

function recorrerArray($enteros){
    $cadena='';
    foreach ($enteros as $value) {
        $cadena .=  $value. "<BR>";    
    }
    return $cadena;
}