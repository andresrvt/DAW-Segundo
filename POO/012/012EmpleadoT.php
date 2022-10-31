<?php

include("012Trabajador.php");
class Empleado extends Trabajador {

            public function __construct(
                string $nombre,
                string $apellidos,
                int $edad,
                private float $horasTrabajadas = 160,
                private float $precioPorHora = 9.5,               
                )

            {
                parent::__construct($nombre,$apellidos,$edad);
            }

            
            public function calcularSueldo():float{
                $sueldo = $this->horasTrabajadas * $this->precioPorHora;
                return $sueldo;
            }

            public static function toHtml(Persona $p): string {
                if ($p instanceof Empleado) {
                    $infoEmpleado  = "<p>Nombre y apellidos: " . $p->getNombreCompleto(). "<br>Edad: " . $p->edad . "<br>Sueldo: " . $p->calcularSueldo();
                    if ($p->debePagarImpuestos()) {
                        $infoEmpleado = $infoEmpleado . "<br>Debe pagar impuestos<br>";
                    }else{
                        $infoEmpleado = $infoEmpleado . "<br>No debe pagar impuestos<br>";
                    } 
                    
                    $infoEmpleado = $infoEmpleado . "<ol>";
                    foreach ($p->getTelefonos() as $key) {
                        $infoEmpleado = $infoEmpleado . "<li>" . $key . "</li>";
                    }
                    $infoEmpleado = $infoEmpleado . "</ol></p>";
                    return $infoEmpleado;
                }
            }

            public function  __toString(): string {
                $infoEmpleado  = "<p>Nombre y apellidos: " . $this->getNombreCompleto(). "<br>Edad: " . $this->edad . "<br>Sueldo: " . $this->calcularSueldo();
                if ($this instanceof Empleado) {
                    if ($this->debePagarImpuestos()) {
                        $infoEmpleado = $infoEmpleado . "<br>Debe pagar impuestos<br>";
                    }else{
                        $infoEmpleado = $infoEmpleado . "<br>No debe pagar impuestos<br>";
                    } 
                    
                    $infoEmpleado = $infoEmpleado . "<ol>";

                    foreach ($this->getTelefonos() as $key) {
                        $infoEmpleado = $infoEmpleado . "<li>" . $key . "</li>";
                    }
                    $infoEmpleado = $infoEmpleado . "</ol></p>";
                    return $infoEmpleado;
                }
            }

} 
?>