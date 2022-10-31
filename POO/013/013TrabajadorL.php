<?php

include_once("013PersonaL.php");
abstract class Trabajador extends Persona
{
    public static $SUELDO_TOPE = 3333;

    private  $telefonos = array();

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

    abstract public function calcularSueldo();

    public function debePagarImpuestos():bool{
        if ((($this->calcularSueldo())>($this::$SUELDO_TOPE))&&($this->edad>21)) {
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

    public static function toHtml(Persona $p):string{
        $infoEmpleado  = "<p>Nombre y apellidos: " . $p->getNombreCompleto(). "<br>Edad: " . $p->edad."</p>";
        return $infoEmpleado;
    }
}
?>