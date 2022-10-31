<!-- 002EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una propiedad privada que almacene un array de números de teléfonos. Añade los 
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos -->

<?php 
    class Empleado{
        
            public string $nombre;
            public string $apellidos;
            public float $sueldo;

            private  $telefonos = array();

            public $numTelefono;


            /**
             * Get the value of nombre
             */ 
            public function getNombre()
            {
                        return $this->nombre;
            }

            /**
             * Set the value of nombre
             *
             * @return  self
             */ 
            public function setNombre($nombre)
            {
                        $this->nombre = $nombre;

                        return $this;
            }

            /**
             * Get the value of apellidos
             */ 
            public function getApellidos()
            {
                        return $this->apellidos;
            }

            /**
             * Set the value of apellidos
             *
             * @return  self
             */ 
            public function setApellidos($apellidos)
            {
                        $this->apellidos = $apellidos;

                        return $this;
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
             * Get the value of numTelefono
             */ 

            function getNombreCompleto(): string{

                $nombreCompleto =$this->nombre. " " .$this->apellidos;
                return $nombreCompleto;
            }
        
        
            function debePagarImpuestos():bool{
                if ($this->sueldo>3300) {
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
                foreach ($this->telefonos as $i=> $value){
                    unset($this->telefonos[$i]);
                }
                
            }
    }

    $empleado = new Empleado();

    $empleado->setNombre("Andrés");
    $empleado->setApellidos("Repiso Vidal de Torres");
    $empleado->setSueldo(1000);
    
    echo $empleado->getNombreCompleto();

    if ($empleado->debePagarImpuestos()) {
        echo "<br>Debe pagar impuestos";
    }else{
        echo "<br>No debe pagar impuestos<br>";

    }

    $empleado->anyadirTelefono(693640836);
    $empleado->anyadirTelefono(954791140);
    $empleado->anyadirTelefono(785434864);
    echo $empleado->listarTelefono();
    $empleado->vaciarTelefonos();
    echo "<br>Se han eliminado los teléfonos";
    echo $empleado->listarTelefono();
    

?>