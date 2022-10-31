<!-- 001Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando 
el sueldo es superior a 3333€) → debePagarImpuestos(): bool -->

<?php 
    class Empleado{
        
            public string $nombre;
            public string $apellidos;
            public float $sueldo;

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

            function getNombreCompleto(): string{

                $nombreCompleto = $this->nombre. " " .$this->apellidos;
                return $nombreCompleto;
            }
        
        
            function debePagarImpuestos():bool{
                if ($this->sueldo>3300) {
                    return true;
                }else{
                    return false;
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
        echo "<br>No debe pagar impuestos";
    }

?>