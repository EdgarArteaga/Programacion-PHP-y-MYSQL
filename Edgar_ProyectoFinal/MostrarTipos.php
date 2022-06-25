<?php
require_once __DIR__ . "/Extraer.php";

$info = Datos();

$Distribuciones = [];
foreach($info as $dato) $Distribuciones[] = $dato->Tipo;

header("Content-Type: application/json");
echo json_encode(array_unique($Distribuciones));