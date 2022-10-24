<?php 
    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>013</title>
</head>
<body> 

        <table>
            <thead>
                <tr>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                    for ($i=0; $i <= $filas; $i++) { 
                        
                        echo "<tr>";
                        for ($j=0; $j <= $columnas; $j++) { 
                            if ($i==0 || $j==0 || $i==$filas || $j==$columnas) {
                                echo "<th>$i.$j</th>";
                            }else{
                                echo "<th> </th>";
                            }
                        }
                        echo "</tr>";
                    }

                ?>
            </tbody>
        </table>
    
</body>
</html>
             