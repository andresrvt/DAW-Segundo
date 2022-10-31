<!-- 010PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.
function public __toString(): string -->

<?php
class Persona
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

    public static function toHtml(Persona $p): string
    {
        $infoPersona  = "<p>Nombre y apellidos del empleado: " . $p->getNombreCompleto() . "<br>Edad: " . $p->edad . "</p>";
        return $infoPersona;
    }

    public function __toString(): string {
        $infoPersona  = "<p>Nombre y apellidos del empleado: " . $this->getNombreCompleto() . "<br>Edad: " . $this->edad . "</p>";
        return $infoPersona;
    }
}
?>