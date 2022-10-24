<!-- 006etapa.php: A partir de una edad muestra por pantalla:
bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67 -->

<?php 
    $edad = $_GET["edad"];

    switch($edad!=0){
        case ($edad<=3):
            echo "Es un bebé";
            break;
        case ($edad>3 && $edad<12):
            echo "Es un niño";
            break;
        case ($edad>13 && $edad<17):
            echo "Es un adolescente";
            break;
        case ($edad>18 && $edad<66):
            echo "Es un adulto";
            break;
        case ($edad>67):
            echo "Es un jubilado";
            break;
    }
?>