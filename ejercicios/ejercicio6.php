<?php

/* 
imprimir por pantalla las tablas de multiplicar del 1 al 10 dentro de una tabla HTML
 */


echo "<table border='1'> <tr>";
echo "<tr>";

for ($cabezera=1;$cabezera<=10;$cabezera++){
    echo "<td>tabla del $cabezera</td>";
    
       
}
echo "</tr>";
echo "<tr>";
for ($i=1;$i<=10;$i++){
    echo "<td>";
        for ($x=1;$x<=10;$x++){
            echo "$i*$x = ". ($i*$x)."<br>";
        }
    echo "</td>";
}
echo "</tr>";
echo "</table>";