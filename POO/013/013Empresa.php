<!--  013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo().-->

<?php
class Empresa
{

    private $trabajadores = array();

    public function __construct(
        private string $nombreEmpresa,
        private string $Direccion,       
    ) {
    }

    
        /**
         * Get the value of nombreEmpresa
         */ 
        public function getNombreEmpresa()
        {
                return $this->nombreEmpresa;
        }

        /**
         * Set the value of nombreEmpresa
         *
         * @return  self
         */ 
        public function setNombreEmpresa($nombreEmpresa)
        {
                $this->nombreEmpresa = $nombreEmpresa;

                return $this;
        }

        /**
         * Get the value of Direccion
         */ 
        public function getDireccion()
        {
                return $this->Direccion;
        }

        /**
         * Set the value of Direccion
         *
         * @return  self
         */ 
        public function setDireccion($Direccion)
        {
                $this->Direccion = $Direccion;

                return $this;
        }

        public function anyadirTrabajador(Trabajador $t){
            $this->trabajadores[] = $t;
        }

        public function listarTrabajadoresHtml():string{

            $listaTrabajadores = "";
            for ($i=0; $i < count($this->trabajadores); $i++) { 
                $listaTrabajadores = $listaTrabajadores . Trabajador::toHtml($this->trabajadores[$i]);
            }

            return $listaTrabajadores;
        }

        public function getCosteNominas(): float{
            $nominasTotal = 0;
            foreach ($this->trabajadores as $key) {
                $nominasTotal += $key->calcularSueldo();
            }
            return $nominasTotal;
        }
}
?>