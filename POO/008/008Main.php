<!-- A partir de ahora voy a crear Main.php para separar las clases del script, debido a que me he informado que es una buena práctica.  -->

<?php 

include_once("008EmpleadoH.php");

$nombreP = "Andrés";
$apellidosP = "Repiso Vidal de Torres";

$p = new Persona($nombreP,$apellidosP);

$nombreE = "Andrés";
$apellidosE = "Repiso Vidal de Torres";

$empleado = new Empleado($nombreE,$apellidosE);

$empleado->anyadirTelefono(693640836);
$empleado->anyadirTelefono(954791140);
$empleado->anyadirTelefono(785434864);

echo $empleado->toHtml($empleado);

/* $empleado->vaciarTelefonos();
echo "<br>Se han eliminado los teléfonos<br>"; */

?>