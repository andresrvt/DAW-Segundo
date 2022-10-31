<!-- 005EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. Cambia la 
constante por una variable estática sueldoTope, de manera que mediante 
getter/setter puedas modificar su valor. -->

<?php 
    class Empleado{
        

            private  $telefonos = array();
            public static $SUELDO_TOPE = 3333;

            public function __construct(
                private string $nombre,
                private string $apellidos,
                private int $sueldo = 1000)
            {
                
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

            function getNombreCompleto(): string{

                $nombreCompleto =$this->nombre. " " .$this->apellidos;
                return $nombreCompleto;
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
    }

    $empleado = new Empleado("Andrés","Repiso Vidal de Torres");
    
    echo $empleado->getNombreCompleto();

    if ($empleado->debePagarImpuestos()) {
        echo "<br>Debe pagar impuestos<br>";
    }else{
        echo "<br>No debe pagar impuestos<br>";

    }

    $empleado->anyadirTelefono(693640836);
    $empleado->anyadirTelefono(954791140);
    $empleado->anyadirTelefono(785434864);
    echo $empleado->listarTelefono();
    $empleado->vaciarTelefonos();
    echo "<br>Se han eliminado los teléfonos<br>";
    echo $empleado->listarTelefono();

?>