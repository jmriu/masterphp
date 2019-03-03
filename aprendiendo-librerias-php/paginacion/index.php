<?php

require_once '../vendor/autoload.php';

$conexion = new mysqli("localhost", "root", "yii", "notas_master");
$conexion->query("SET NAMES 'utf8'"); 

$consulta = $conexion->query("SELECT COUNT(id) AS total FROM notas");
//$records = $consulta->num_rows;
$records = $consulta->fetch_object()->total;
$records_per_page = 2;
//var_dump($records);
$pagination = new Zebra_Pagination();

$pagination->records($records);

$pagination->records_per_page($records_per_page);

$page = $pagination->get_page();

$empieza = (($page -1)*$records_per_page);
$notas = $conexion->query("select * from notas LIMIT $empieza,$records_per_page");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while ($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3> <hr/>";
}
$pagination->render();