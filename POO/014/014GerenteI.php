<?php

include_once("014TrabajadorI.php");
class Gerente extends Trabajador {

            public function __construct(
                string $nombre,
                string $apellidos,
                int $edad,
                private float $salario,            
                )

            {
                parent::__construct($nombre,$apellidos,$edad);
            }

            public function calcularSueldo():float{
                $sueldo = $this->salario + ($this->salario*$this->edad/100);
                return $sueldo;
            }

            public static function toHtml(Persona $p): string {
                if ($p instanceof Gerente) {
                    $infoGerente  = "<p>Nombre y apellidos: " . $p->getNombreCompleto(). "<br>Edad: " . $p->edad . "<br>Sueldo: " . $p->calcularSueldo();
                    if ($p->debePagarImpuestos()) {
                        $infoGerente = $infoGerente . "<br>Debe pagar impuestos<br>";
                    }else{
                        $infoGerente = $infoGerente . "<br>No debe pagar impuestos<br>";
                    } 
                    
                    $infoGerente = $infoGerente . "<ol>";
                    foreach ($p->getTelefonos() as $key) {
                        $infoGerente = $infoGerente . "<li>" . $key . "</li>";
                    }
                    $infoGerente = $infoGerente . "</ol></p>";
                }
                return $infoGerente;
            }

            public function  __toString(): string {
                $infoGerente  = "<p>Nombre y apellidos: " . $this->getNombreCompleto(). "<br>Edad: " . $this->edad . "<br>Sueldo: " . $this->calcularSueldo();
                    if ($this->debePagarImpuestos()) {
                        $infoGerente = $infoGerente . "<br>Debe pagar impuestos<br>";
                    }else{
                        $infoGerente = $infoGerente . "<br>No debe pagar impuestos<br>";
                    } 
                    
                    $infoGerente = $infoGerente . "<ol>";
                    foreach ($this->getTelefonos() as $key) {
                        $infoGerente = $infoGerente . "<li>" . $key . "</li>";
                    }
                    $infoGerente = $infoGerente . "</ol></p>";
                return $infoGerente;
            }


} 
?>