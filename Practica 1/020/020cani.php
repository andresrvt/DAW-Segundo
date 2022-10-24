<?php 
    $cadena ="escribe una funcion que sea cani";

    for ($i=0; $i < strlen($cadena); $i++) { 
            echo ucfirst(substr($cadena,$i,1)); //Convertimos a mayúsculas el primer elemento de la cadena y lo mostramos.
            echo substr($cadena,($i+1),1); // Mostramos la siguiente posición sin modificar.
            $i++; // Se añade uno más a cada vuelta del bucle para que la conversión a mayúscula sea cada 2 letras.
        }
?>