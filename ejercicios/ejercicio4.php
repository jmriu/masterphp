<?php

/* 
  recoger 2 numeros por get y hacer todas las operaciones basicas de una calculadora
 */ 
if (isset($_GET['num1']) && (isset($_GET['num2']))){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];

    echo "suma de ".$num1. " y " .$num2." = ".($num1+$num2)."<br>";
    echo "resta de ".$num1. " y " .$num2." = ".($num1-$num2)."<br>";
    echo "multiplicación de ".$num1. " y " .$num2." = ".($num1*$num2)."<br>";
    echo "división de ".$num1. " y " .$num2." = ".($num1/$num2)."<br>";
} else {
    echo "Introduce los numeros";
}