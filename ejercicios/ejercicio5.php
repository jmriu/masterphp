<?php

/* 
 mostrar por pantalla todos todos los numeros entre los numeros pasados GET
 */

if (isset($_GET['num1']) && (isset($_GET['num2']))){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    if ($num1<$num2){
        for ($i=$num1;$i<$num2;$i++){
            echo "$i <br>";    
        }
    } else {
        echo "error numeros pasados";
    }
} else {
    echo "Introduce los numeros";
}