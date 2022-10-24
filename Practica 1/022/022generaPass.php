<!-- 022generaPass.php: Crea una función que, a partir de un tamaño, genere 
una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria. -->

<?php 
    $size = $_GET["size"];
    echo generaPass($size);

    function generaPass(int $size) :string {
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // Se guarda todos los caracteres posibles de la contraseña
        $shfl = str_shuffle($caracteres); // El str_shuffle reordena una cadena aleatoriamente
        $pass = substr($shfl,0,$size); // Con la cadena reodenada de forma aleatoria, nos quedamos con la cantidad de caracteres que haya elegido el usuario.
        return  $pass;
    } 
?>


