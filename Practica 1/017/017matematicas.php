<!-- 017matematicas.php: Añade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de d√≠gitos de un n√∫mero.
digitoN(int $num, int $pos): int ‚ devuelve el digito que ocupa, 
empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int ‚ le quita por detrás (derecha) 
$cant digitos.
quitaPorDelante(int $num, int $cant): int ‚le quita por delante (izquierda) 
$cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos 
posicionales como argumentos con nombre. -->

<?php
    $num = "29051994";
    $pos = intval($_GET["pos"])+1;
    $cant = intval($_GET["cant"]);

    function digitos(int $num) :int {
        return strlen($num);
    }

    /* Tenemos que pasarle la posición y cantidad por url */
    function digitoN(int $num, int $pos): int {
        return intval(substr($num,$pos,1));
    }

    function quitaPorDetras(int $num, int $cant): int {
        return intval(substr($num,0,-$cant));
    }

    function quitaPorDelante(int $num, int $cant): int {
        return intval(substr($num,0,$cant));
    }

    echo "Teniendo el número $num, buscamos: <br><br> La cantida de dígitos es : " . digitos($num) . "<br> El valor en la posición $pos es : " . digitoN($num, $pos) . "<br> 
    Si quitamos $cant dígitos por detrás, obtenemos: " . quitaPorDetras($num, $cant) .
    "<br>Por último, si quitamos $cant dígitos por delante, obtenemos: " . quitaPorDelante($num, $cant);
?>