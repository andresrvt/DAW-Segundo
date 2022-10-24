<!-- 004edad.php: Sabiendo la edad de una persona, mostrar la edad que 
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
que trabajarás hasta los 67 años. En este caso, no hace falta que 
previamente crees un formulario, puedes probar el ejercicio vía URL: 
004edad.php?edad=33. Tip: $anyoActual = date("Y"); -->


<?php 
    $edad = $_GET["edad"];
    $anyoActual = date("Y");
    $edadFutura = $edad + 10;
    $edadPasada = $edad - 10;
    $anyoFuturo = date("Y") + 10; 
    $anyoPasado = date("Y") - 10;
    $faltaJubilacion = 67 - $edad;
    $anyoJubilacion = date("Y") + $faltaJubilacion;

    echo "Teniendo esta persona $edad años, en el $anyoFuturo tendrá $edadFutura y en el $anyoPasado tenía $edadPasada. Se jubilará en el año $anyoJubilacion"
 ?>