<?php

/* 
 mostrar por pantalla todos todos los numeros entre los numeros impares pasados GET
 */

if (isset($_GET['num1']) && (isset($_GET['num2']))){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    if ($num1<$num2){
        for ($i=$num1;$i<$num2;$i++){
            if ($i%2!=0){
            echo "$i <br>";    
            }
        }
    } else {
        echo "error numeros pasados";
    }
} else {
    echo "Introduce los numeros";
}