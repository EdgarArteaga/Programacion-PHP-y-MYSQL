<?php
require_once __DIR__ . "/Extraer.php";

$datos = Datos();

$city = [];
foreach($datos as $index) $city[] = $index->Ciudad;

header("Content-Type: application/json");
echo json_encode(array_unique($city));
?>