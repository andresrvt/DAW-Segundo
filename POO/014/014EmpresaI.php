<!--  014EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.
Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa. Por ejemplo:

toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz 
creado.-->

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
        public function toJSON(): string {
            foreach ($this as $clave => $valor) {
                $mapa[$clave] = $valor;
            }
            return json_encode($mapa);
        }

        public function toSerialize():string{
            foreach ($this as $clave => $valor) {
                $mapa[$clave] = $valor;
            }
            return serialize($mapa);
        }
}
?>
