<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//$html="<h1>Hola mundo pdf generado</h1>";
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');