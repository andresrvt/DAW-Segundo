<!-- 018preparaTique.php: A partir de una cantidad de productos, leer el 
nombre y coste de la cantidad de productos indicados (la cantidad, se 
recibe mediante un parámetro GET vía URL).
018imprimeTique.php: Tras leer los datos del tique de compra, enumera en 
una tabla los productos, con su precio en euros y pesetas, y finalmente, en 
una última fila, totalizar en ambas monedas. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepara ticket</title>
</head>
<body>

    <form action="018imprimeTique.php" method="GET">

    <table border="3px">
        <tr>
            <td>Limón</td>
                <td>Precio</td>
                <td>
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="Limon" id="cant">
            </td>
        </tr>

        <tr>
            <td>Manzana</td>
                <td>Precio</td>
                <td>
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="Manzana" id="cant">
                </td>
        </tr>

            <td>Sandía</td>
            <td>Precio</td>
            <td>
                <label for="cantidad">Cantidad</label>
                <input type="number" name="Sandia" id="cant">
            </td>
    </table><br>

    <label for="submit">Enviar los datos de los productos:</label>
                <input type="submit" name="submit" id="submit">

</body>
</html>

