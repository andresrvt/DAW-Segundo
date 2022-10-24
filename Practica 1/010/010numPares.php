<!-- 010numPares.php: A partir del anterior, refactorizar para que funcione con inicio y fin. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares 10</title>
</head>
<body>

    <ul> Números Pares

    <?php 

        // Introducir datos por url.
        $inicio = $_GET["inicio"];
        $fin = $_GET["fin"];

        for ($i=$inicio; $i <=$fin ; $i++) { 
            if (($i%2)===0) {
                echo "<li>$i</li>";
            }
        }
    ?>

    </ul>

</body>
</html>