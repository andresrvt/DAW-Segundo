<!-- 007ecuacion2.php: Crea un programa que resuelva una ecuación de 2º 
grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
tener solución dependiendo del valor del discriminante b²-4ac.Tip: Para 
calcular la raíz cuadrada deberás utilizar la función sqrt() -->

<?php
// Para añadir los valores tendremos que poner en la url los datos de la siguiente forma: http://localhost/practica/Practica%201/007/007ecuacion2.php?a=2&&b=6&&c=4 
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    $d= "0";
    $e= "0";

    $valor_discriminante = $b*$b-(4*$a*$c); 

    echo "$valor_discriminante<br><br>";
    
    switch($valor_discriminante<=>0){
        case -1:
            echo "No tiene solución";
            break;
        case 0:
            echo "Tiene una única solución<br>";
            $d = (-$b + sqrt($valor_discriminante))/(2*$a);
            echo "El resultado es $d";
            break;
        case 1:
            echo "Tiene 2 soluciones<br>";
            $d = (-$b + sqrt($valor_discriminante))/(2*$a);
            $e = (-$b - sqrt($valor_discriminante))/(2*$a);
            echo "La solución 1 vale: $d <br> La solución 2 vale: $e";
            break;
    }

?>