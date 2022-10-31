<?php

include_once("011PersonaA.php");
class Empleado extends Persona {
    private  $telefonos = array();
            public static $SUELDO_TOPE = 3333;

            public function __construct(
                string $nombre,
                string $apellidos,
                int $edad,
                private int $sueldo = 1000,
                )

            {
                parent::__construct($nombre,$apellidos,$edad);
            }

            /**
             * Get the value of sueldo
             */ 
            public function getSueldo()
            {
                        return $this->sueldo;
            }

            /**
             * Set the value of sueldo
             *
             * @return  self
             */ 
            public function setSueldo($sueldo)
            {
                        $this->sueldo = $sueldo;

                        return $this;
            }
            
            /**
             * Get the value of telefonos
             */ 
            public function getTelefonos()
            {
                        return $this->telefonos;
            }

            /**
             * Set the value of telefonos
             *
             * @return  self
             */ 
            public function setTelefonos($telefonos)
            {
                        $this->telefonos = $telefonos;

                        return $this;
            }

                        /**
             * Get the value of SUELDO_TOPE
             */ 
            public function getSUELDO_TOPE()
            {
                        return $this->SUELDO_TOPE;
            }

            /**
             * Set the value of SUELDO_TOPE
             *
             * @return  self
             */ 
            public function setSUELDO_TOPE($SUELDO_TOPE)
            {
                        $this->SUELDO_TOPE = $SUELDO_TOPE;

                        return $this;
            }
            
            function debePagarImpuestos():bool{
                if ((($this->sueldo)>($this::$SUELDO_TOPE))&&($this->edad>21)) {
                    return true;
                }else{
                    return false;
                }
            }

            function anyadirTelefono($numTelefono): void{
                $this->telefonos[] = $numTelefono;
            }

            function listarTelefono(): string{
                $listaTelefono = "";
                for ($i=0; $i < count($this->telefonos); $i++) {
                    if ($i != count($this->telefonos) - 1) {
                      $listaTelefono = $listaTelefono . $this->telefonos[$i] .  " , " ;  
                    }else{
                        $listaTelefono = $listaTelefono . $this->telefonos[$i];
                    }
                }
                return $listaTelefono;
            }

            function vaciarTelefonos(): void{
                foreach ($this->telefonos as $i=>$value){
                    unset($this->telefonos[$i]);
                }
            }
            public static function toHtml(Persona $p): string {
                $infoEmpleado  = "<p>Nombre y apellidos: " . $p->getNombreCompleto(). "<br>Edad: " . $p->edad;
                if ($p instanceof Empleado) {
                    if ($p->debePagarImpuestos()) {
                        $infoEmpleado = $infoEmpleado . "<br>Debe pagar impuestos<br>";
                    }else{
                        $infoEmpleado = $infoEmpleado . "<br>No debe pagar impuestos<br>";
                    } 
                    
                    $infoEmpleado = $infoEmpleado . "<ol>";
                    for ($i=0; $i < count($p->getTelefonos()); $i++) { 
                        $infoEmpleado = $infoEmpleado . "<li>" . $p->telefonos[$i] . "</li>";
                    }
                    $infoEmpleado = $infoEmpleado . "</ol></p>";
                    return $infoEmpleado;
                }
            }

            public function  __toString(): string {
                $infoEmpleado  = "<p>Nombre y apellidos: " . $this->getNombreCompleto(). "<br>Edad: " . $this->edad;
                if ($this instanceof Empleado) {
                    if ($this->debePagarImpuestos()) {
                        $infoEmpleado = $infoEmpleado . "<br>Debe pagar impuestos<br>";
                    }else{
                        $infoEmpleado = $infoEmpleado . "<br>No debe pagar impuestos<br>";
                    } 
                    
                    $infoEmpleado = $infoEmpleado . "<ol>";
                    for ($i=0; $i < count($this->getTelefonos()); $i++) { 
                        $infoEmpleado = $infoEmpleado . "<li>" . $this->telefonos[$i] . "</li>";
                    }
                    $infoEmpleado = $infoEmpleado . "</ol></p>";
                    return $infoEmpleado;
                }
            }
} 
?>