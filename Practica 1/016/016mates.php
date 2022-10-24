<!-- 016mates.php: Genera un array aleatorio de 33 elementos con números 
comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media. -->

<?php
    $num = [];
    $mayor = 0;
    $menor = 100;
    $media = 0;

    for ($i=0; $i <= 33; $i++) { 
        $num[$i] = rand(0,100);
        echo "$num[$i]<br>";
        $media =+ $num[$i];

        if ($menor>$num[$i]) {
            $menor = $num[$i];
        }else if($mayor<$num[$i]){
            $mayor = $num[$i];
        }
    }

    $media = $media / 33;

    echo "<br>El número mayor es $mayor, el menor es $menor y la media de todos los números es $media";
?>