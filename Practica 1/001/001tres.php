<!-- /* Muestra 3 frases cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido. 
Tras ello, introduce dos comentarios, uno de bloque y otro de una línea. */ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?php echo "Este es un mensaje con print <br>"?></p>
<p><?php print "Este es un mensaje con print <br>"?></p>
<p><?= "Mensaje sin necesidad de abrir con la etiqueta php"; ?></p>

</body>
</html>

<?php 

/* Este
es
un
comentario
en
bloque*/

// Este es un comentario en línea.

?>