<?php
require '../vendor/autoload.php';

$reforma = new \App\Orcamento\Orcamento(500);

$icms = new \App\Imposto\Icms();
$iss = new \App\Imposto\Iss();

echo "ISS: {$iss->calcular($reforma)}<br>";
echo "ICMS: {$icms->calcular($reforma)}<br>";