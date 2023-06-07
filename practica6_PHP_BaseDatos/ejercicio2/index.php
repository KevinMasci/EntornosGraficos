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
        $resultado = mysqli_query($link, "Select * from ciudades order by id");
        mysqli_close($link);
    ?>

    <h1>CRUD</h1>
    <a href="index_paginacion.php">Ver con paginacion</a>

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
            while($fila = mysqli_fetch_array($resultado))
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
        ?>

    </table>
    <a href="agregar_ciudad.html">Agregar ciudad</a>
</body>
</html>