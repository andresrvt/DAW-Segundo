<?php 

    $cantidadLimon = $_GET["Limon"];
    $cantidadManzana = $_GET["Manzana"];
    $cantidadSandia = $_GET["Sandia"];
    $cantidades = [$cantidadLimon,$cantidadManzana,$cantidadSandia];
    $precioTotal = 0;
    $totalPesetas = 0;
    $precio = 0;

    $array_productos = array(
        array('limon', $cantidadLimon,4),
        array("manzana",$cantidadManzana, 9),
        array('sandia', $cantidadSandia, 5)
    );

   function convertirPesetas ($euros):int{
        $pesetas = $euros * 166;
        return $pesetas;
    } 
?>



<table border="3px solid">
        <thead>
            <tr colspan="4">
               <th>Productos</th> 
               <th>Cantidad</th> 
               <th>Precio(€)</th> 
               <th>Precio(Pesetas)</th> 
            </tr>
        </thead>
            <tbody>
                <tr>
                <?php
                    for ($i=0; $i < count($array_productos); $i++) { 
                        for ($j=0; $j < count($cantidades); $j++) { 

                            $precio = $array_productos[$i][1]*$cantidades[$j];   
                        }
                        
                        echo "<tr><td>".$array_productos[$i][0]. "</td>";
                        echo "<td>".$array_productos[$i][1]."</td>";
                        echo "<td>".$precio."</td>";
                        echo "<td>".convertirPesetas($array_productos[$i][2])."</td></tr>";
                        $precioTotal = $precioTotal + $precio;
                        $totalPesetas = $totalPesetas + convertirPesetas($array_productos[$i][2]);
                    }
                ?>
                </tr>

                <tr>
                    <td>Total:
                <?php echo "<td>".$precioTotal."€</td>"; ?>
                    </td>
                

                    <td>Total Pesetas:
                <?php echo "<td>".$totalPesetas."Pesetas</td>"; ?>
                    </td>
                </tr>
            
            </tbody>
    </table>
