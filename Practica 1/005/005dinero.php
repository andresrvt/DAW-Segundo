<!-- 005dinero.php: A partir de una cantidad de dinero, mostrar su 
descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), 
para que el número de elementos sea mínimo. No se utilizar ninguna 
instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:
1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
1 moneda de 2
2 monedas de 1 -->

<?php 
    // Introducir dinero por URL
    $dinero = $_GET["dinero"];
    $billetes500 = 0;
    $billetes200 = 0;
    $billetes100 = 0;
    $billetes50 = 0;
    $billetes20 = 0;
    $billetes10 = 0;
    $billetes5 = 0;
    $monedas2 = 0;
    $monedas1 = 0;

    while($dinero != 0){

        $billetes500 = intdiv($dinero, 500);
        $dinero = $dinero % 500;

        $billetes200 = intdiv($dinero, 200);
        $dinero = $dinero % 200;

        $billetes100 = intdiv($dinero, 100);
        $dinero = $dinero % 100;

        $billetes50 = intdiv($dinero, 50);
        $dinero = $dinero % 50;

        $billetes20 = intdiv($dinero, 20);
        $dinero = $dinero % 20;

        $billetes10 = intdiv($dinero, 10);
        $dinero = $dinero % 10;

        $monedas2 = intdiv($dinero, 2);
        $dinero = $dinero % 2;

        $monedas1 = intdiv($dinero, 1);
        $dinero = $dinero % 1;
    }

    echo "$billetes500 billete de 500 <br> $billetes200 billete de 200 <br> $billetes100 billete de 100 <br> $billetes50 billete de 50 <br> 
    $billetes20 billete de 20 <br> $billetes10 billete de 10 <br> $billetes50 billete de 50 <br> $monedas2 moneda de 2 <br> $monedas1 monedas de 1";
?>
