<?php 

    $texto = $_GET["texto"];
    $respuestas = ["sí","no","quizás","claro que sí","por supuesto que no","no lo tengo claro", "seguro", "yo diría que sí","ni de coña"];

    echo "${texto}?".$respuestas[array_rand($respuestas)];

?>