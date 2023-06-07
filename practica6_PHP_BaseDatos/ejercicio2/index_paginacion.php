<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        table{
            border:1px solid black; border-collapse: collapse
        }
        th, td{
            border:1px solid black;
            padding: 5px;
        }
        th{
            background-color: aliceblue;
        }
    </style>
</head>
<body>

    <?php
    
        include('conexion.php');

        $cant_por_pag = 2;
        $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null;

        if (!$pagina) {
        $inicio = 0;
        $pagina=1;
        }
        else {
        $inicio = ($pagina - 1) * $cant_por_pag;
        }

        $query = "SELECT * FROM ciudades";
        $result = mysqli_query($link, $query);
        $total_registros = mysqli_num_rows($result);

        $total_paginas = ceil($total_registros/ $cant_por_pag);
        echo "Numero de registros encontrados: " . $total_registros . "<br>";
        echo "Se muestran paginas de " . $cant_por_pag . " registros cada una<br>";
        $query = "SELECT * FROM ciudades"." limit " . $inicio . "," . $cant_por_pag;
        $result = mysqli_query($link, $query);
        $total_registros = mysqli_num_rows($result);

    ?>

    <h1>CRUD</h1>

    <a href="index.php">Ver sin paginacion</a>
    <table>

        <tr>
            <th>Id</th>
            <th>Ciudad</th>
            <th>Pais</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
        </tr>

        <?php
            while($fila = mysqli_fetch_array($result))
            {
        ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['ciudad'] ?></td>
                <td><?php echo $fila['pais'] ?></td>
                <td><?php echo $fila['habitantes'] ?></td>
                <td><?php echo $fila['superficie'] ?></td>
                <td><?php echo $fila['tieneMetro'] ?></td>
                <td><a href="modificar_ciudad.php?id=<?php echo $fila['id']?>">Modificar</a></td>
                <td><a href="eliminar.php?id=<?php echo $fila['id']?>">Eliminar</a></td>
            </tr>
        <?php
            }
            mysqli_free_result($result);
            mysqli_close($link);
        ?>

    </table>
    <?php 
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
        if ($total_paginas > 1)
        {
            for ($i=1;$i<=$total_paginas;$i++)
            {
                if ($pagina == $i)
                    echo $pagina . " ";
                else
                    echo "<a href='index_paginacion.php?pagina=" . $i ."'>" . $i . "</a> <br>";
            }
        }
    
    ?>
    <a href="agregar_ciudad.html">Agregar ciudad</a>  
</body>
</html>