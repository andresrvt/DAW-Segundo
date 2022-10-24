<?php
$nombre = $_GET["nombre"];
$p_apellido = $_GET["p_apellido"];
$s_apellido = $_GET["s_apellido"];
$email = $_GET["email"];
$anio_nacimiento = $_GET["anio_nacimiento"];
$movil = $_GET["movil"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MisDatos003</title>
</head>
<body>
<table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Email</th>
                    <th>Año de nacimiento</th>
                    <th>Móvil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $p_apellido ?></td>
                    <td><?= $s_apellido ?></td>
                    <td><?= $email ?></td>
                    <td><?= $anio_nacimiento ?></td>
                    <td><?= $movil ?></td>
                </tr>
            </tbody>
        </table>
    
</body>
</html>