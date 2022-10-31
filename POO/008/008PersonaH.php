<!-- 008PersonaH.php: Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro. Para acceder a las propiedades del empleado con la persona que recibimos 
como parámetro, comprobaremos su tipo: -->

<?php
class Persona
{

    public function __construct(
        protected string $nombre,
        protected string $apellidos
    ) {
    }

    public function getNombreCompleto(): string
    {

        $nombreCompleto = $this->nombre . " " . $this->apellidos;
        return $nombreCompleto;
    }

    public static function toHtml(Persona $p): string
    {
        $infoPersona  = "<p>Nombre y apellidos del empleado: " . $p->getNombreCompleto() . "</p>";
        return $infoPersona;
    }
}
?>