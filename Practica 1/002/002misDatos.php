<!-- Escribe un programa que almacene en variables tu 
nombre, primer apellido, segundo apellido, email, año en el que naciste y 
móvil. Luego muéstralos por pantalla dentro de una tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $nombre = "Andres";
        $p_apellido = "Repiso";
        $s_apellido = "Vidal de Torres";
        $email = "andresrvt@gmail.com";
        $anio_nacimiento = "29/05/1994";
        $movil = "693640836";
    ?>

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