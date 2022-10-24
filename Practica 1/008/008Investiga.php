<!-- 008Investiga para qué sirve la instrucción match(), disponible desde PHP8 
(https://www.php.net/manual/es/control-structures.match.php). Explica 
con un par de líneas su propósito y mediante código demuestra su uso. -->

<!-- La instrucción match es muy parecida a switch, donde existen distintas opciones, pero en lugar de recorrer todas,
el programa irá directamente al caso concreto debido a que busca valores idénticos (===).
Al contrario de los switch es que pueden contener cualquier número de expresiones, un match puede contener una sola expresión. 
Otra diferencia es que switch no devuelve ningún valor, mientras que match sí. -->

<?php 

    $objeto = $_GET["objeto"];

    // Si escribimos en la url: ...?objeto=platano, debería devolver fruta.
        $resultado = match($objeto) {
            'manzana','platano' => 'fruta',
            'tomate','pepino' => 'hortalizas',
        };

        echo "$resultado";
 ?>