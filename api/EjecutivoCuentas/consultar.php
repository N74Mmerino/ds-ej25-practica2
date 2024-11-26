<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/ejecutivoCuenta.php';


$resp= new ConsultarRespuesta();

$ec= new EjecutivoCuenta();
$ec->Id=$_GET['Id'];
$ec->Descripcion="Ejecutivo 1";
$ec->Usuario="comercial";

$resp->EjecutivoDeCuenta=$ec;

echo json_encode ($resp);