<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/ejecutivoCuenta.php';

$resp= new ConsultarTodosRespuesta();

$le1= new EjecutivoCuenta();
$le1->Id=1;
$le1->Descripcion="Ejecutivo 1";
$le1->Usuario="comercial";

$le2= new EjecutivoCuenta();
$le2->Id=2;
$le2->Descripcion="Ejecutivo zona sur";
$le2->Usuario="javkin";

$resp->ListEjecutivosDeCuentas[]=$le1;
$resp->ListEjecutivosDeCuentas[]=$le2;


echo json_encode ($resp);