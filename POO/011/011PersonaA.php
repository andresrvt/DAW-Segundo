<!-- 011PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos. -->

<?php
abstract class Persona
{

    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad
    ) {
    }

    public function getNombreCompleto(): string
    {

        $nombreCompleto = $this->nombre . " " . $this->apellidos;
        return $nombreCompleto;
    }

    abstract public static function toHtml(Persona $p): string;

    public function __toString(): string {
        $infoPersona  = "<p>Nombre y apellidos del empleado: " . $this->getNombreCompleto() . "<br>Edad: " . $this->edad . "</p>";
        return $infoPersona;
    }
}
?>