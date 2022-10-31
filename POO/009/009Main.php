<?php 

include_once("009EmpleadoE.php");

$nombreP = "Andrés";
$apellidosP = "Repiso Vidal de Torres";
$edadP = 28;

$p = new Persona($nombreP,$apellidosP,$edadP);

$nombreE = "Andrés";
$apellidosE = "Repiso Vidal de Torres";
$edadE = 28;

$empleado = new Empleado($nombreE,$apellidosE,$edadE);

$empleado->anyadirTelefono(693640836);
$empleado->anyadirTelefono(954791140);
$empleado->anyadirTelefono(785434864);

echo $empleado->toHtml($empleado);

/* $empleado->vaciarTelefonos();
echo "<br>Se han eliminado los teléfonos<br>"; */

?>