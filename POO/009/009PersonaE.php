<!-- 009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario. -->

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
}
?>