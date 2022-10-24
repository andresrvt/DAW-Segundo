<?php 
    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <table>
            <tbody>
                <?php 
                
                    for ($i=0; $i < $filas; $i++) { 
                        
                        echo "<tr>";
                        for ($j=0; $j < $columnas; $j++) { 
                            echo "<th>$i.$j</th>";
                        }
                        echo "</tr>";
                    }

                ?>
            </tbody>
        </table>
    
</body>
</html>