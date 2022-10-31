<?php 

include_once("012EmpleadoT.php");
include_once("012Gerente.php");


$nombreE = "Andrés";
$apellidosE = "Repiso Vidal de Torres";
$edadE = 28;

$empleado = new Empleado($nombreE,$apellidosE,$edadE);
$gerente = new Gerente("Manuel","Lozano Catalán",42);

$empleado->anyadirTelefono(693640836);
$empleado->anyadirTelefono(954791140);
$empleado->anyadirTelefono(785434864);

$gerente->anyadirTelefono(741852369);
$gerente->anyadirTelefono(954786543);
$gerente->anyadirTelefono(665324782);

echo $gerente->calcularSueldo();
echo "Información del empleado mostrada por HTML<br>" . $empleado->toHtml($empleado);
echo "Información del empleado mostrada por la función toString<br>" .$empleado->__toString();

echo "<hr>Información del gerente mostrada por HTML<br>" . $gerente->toHtml($gerente);
echo "Información del gerente mostrada por la función toString<br>" .$gerente->__toString();

/* $empleado->vaciarTelefonos();
echo "<br>Se han eliminado los teléfonos<br>"; */

?>