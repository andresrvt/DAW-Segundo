<?php 

include_once("014EmpleadoI.php");
include_once("014GerenteI.php");
include_once("014EmpresaI.php");


$nombreE = "Andrés";
$apellidosE = "Repiso Vidal de Torres";
$edadE = 28;

$empleado = new Empleado($nombreE,$apellidosE,$edadE);
$gerente = new Gerente("Manuel","Lozano Catalán",42,2500);
$empresa = new Empresa("Netflix","Calle Pitumba");

$empresa->anyadirTrabajador($empleado);
$empresa->anyadirTrabajador($gerente);
echo $empresa->listarTrabajadoresHtml();
echo $empresa->getCosteNominas();

$empleado->anyadirTelefono(693640836);
$empleado->anyadirTelefono(954791140);
$empleado->anyadirTelefono(785434864);

$gerente->anyadirTelefono(741852369);
$gerente->anyadirTelefono(954786543);
$gerente->anyadirTelefono(665324782);

echo "Información del empleado mostrada por HTML<br>" . $empleado->toHtml($empleado);
echo "Información del empleado mostrada por la función toString<br>" .$empleado->__toString();

echo "<hr>Información del gerente mostrada por HTML<br>" . $gerente->toHtml($gerente);
echo "Información del gerente mostrada por la función toString<br>" .$gerente->__toString();

echo $empresa->toJSON()."<br><br>";
echo $empresa->toSerialize();

/* $empleado->vaciarTelefonos();
echo "<br>Se han eliminado los teléfonos<br>"; */

?>