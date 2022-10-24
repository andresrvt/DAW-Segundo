<!-- 011tabla.php: Muestra dentro de una tabla HTML la tabla de multiplicar del 
número que reciba como parámetro. Utiliza <thead> con sus respectivos 
<th> y <tbody> para dibujar la tabla. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $num = $_GET["num"]; ?>
    
    <table>
        <thead>
            <th>
               <tr>Tabla de multiplicar del <?= $num ?><br></tr> 
            </th>
        </thead>
            <tbody>
                <td>
                <?php
                    $resultado = 0;
                    for ($i=0; $i <= 10; $i++) { 
                        $resultado = $num * $i;
                        echo "<tr>$num * $i = $resultado</tr><br>";
                    }
                ?></td>
            </tbody>
    </table>

</body>
</html>

