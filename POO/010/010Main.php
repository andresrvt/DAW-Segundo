<?php 

include_once("010EmpleadoS.php");

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

echo "Información mostrada por HTML<br>" . $empleado->toHtml($empleado);
echo "<hr>Información mostrada por la función toString<br>" .$empleado->__toString();

/* $empleado->vaciarTelefonos();
echo "<br>Se han eliminado los teléfonos<br>"; */

?>