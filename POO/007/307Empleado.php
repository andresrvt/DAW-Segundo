
<?php 
    include_once("007Persona.php");
    class Empleado extends Persona{
        

            private  $telefonos = array();
            public static $SUELDO_TOPE = 3333;

            public function __construct(
                string $nombre,
                string $apellidos,
                private int $sueldo = 1000,
                )

            {
                parent::__construct($nombre,$apellidos);
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
                if (($this->sueldo)>($this::$SUELDO_TOPE)) {
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

            public static function to_Html(Empleado $empleado): string{
                $infoEmpleado  = "<p>Nombre y apellidos del empleado: " . $empleado->getNombreCompleto(). "<br>Sueldo = " .$empleado->getSueldo();

                if ($empleado->debePagarImpuestos()) {
                    $infoEmpleado = $infoEmpleado . "<br>Debe pagar impuestos<br>";
                }else{
                    $infoEmpleado = $infoEmpleado . "<br>No debe pagar impuestos<br>";
                } 
                
                $infoEmpleado = $infoEmpleado . "<ol>";
                for ($i=0; $i < count($empleado->getTelefonos()); $i++) { 
                    $infoEmpleado = $infoEmpleado . "<li>" . $empleado->telefonos[$i] . "</li>";
                }
                $infoEmpleado = $infoEmpleado . "</ol></p>";
                return $infoEmpleado;
            }
    }

    $nombre = "Andrés";
    $apellidos = "Repiso Vidal de Torres";

    $empleado = new Empleado($nombre,$apellidos);

    $empleado->anyadirTelefono(693640836);
    $empleado->anyadirTelefono(954791140);
    $empleado->anyadirTelefono(785434864);

    echo $empleado->to_Html($empleado);

    /* $empleado->vaciarTelefonos();
    echo "<br>Se han eliminado los teléfonos<br>"; */
?>