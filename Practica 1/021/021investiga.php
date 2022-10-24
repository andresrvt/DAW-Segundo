<!-- 021investiga.php: Investiga las siguientes funciones de cadena (explica para 
qué sirven mediante comentarios, y programa un pequeño ejemplo de cada 
una de ellas): ucwords, strrev, str_repeat y md5. -->


<!-- ucwords. Es una función que sirve para convertir en mayúsculas el primer caracter de una cadena, si el caracter es alfanumérico. -->

<?php 

    $cadena = "esta es una cadena con la primera letra en mayúscula";

    $nuevaCadena = ucwords($cadena);
    echo "$nuevaCadena<br>";

?>

<!-- strrev. Se una para devolver una cadena invertida -->

<?php 

    $cadena = "Esta es una cadena invertida";

    $nuevaCadena = strrev($cadena);
    echo "$nuevaCadena<br>";

?>

<!-- Str_repeat. Sirve para repetir un input un número de veces deseado.-->

<?php 

    $cadena = "Esto se va a repetir 5 veces. ";

    $nuevaCadena = Str_repeat($cadena,5); //Después de pasarle la cadena que queramos repetir, le pondremos el número de veces que necesitemos que se repita.
    echo "$nuevaCadena<br>";

?>

<!-- md5. Es un protocolo criptográfico que se usa para autenticar mensajes y verificar el contenido y las firmas digitales. 
El MD5 se basa en una función hash que verifica que un archivo que ha enviado coincide con el que ha recibido la persona a la que se lo ha enviado -->

<?php
$str = "Hola Olga";
// echo  md5($str);  Muestra la cadena en formato alfanumérico.

if (md5($str) == "20d6fde88a87252b566d5b9e637bf844") //En caso de que coincidan se mostrará el mensaje sin encriptar.
  {
  echo "Coincide. El mensaje es: $str";
  }
?>