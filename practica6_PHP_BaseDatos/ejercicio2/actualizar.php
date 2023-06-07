<html>

<head>
<title>Editar</title>
</head>
<body>

<?php

    include('conexion.php');

    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $id = $_POST['id'];

    if (isset($_POST['tienemetro']))
    {
        $tienemetro = 1;
    }
    else
    {
        $tienemetro = 0;
    }

    $query = "UPDATE ciudades SET ciudad = '$ciudad', pais = '$pais', habitantes = '$habitantes', superficie = '$superficie', tieneMetro = '$tienemetro' WHERE id = '$id'";
    mysqli_query($link, $query) or die(mysqli_error($link));

    echo ("ciudad modificada");
    echo("<a href= 'index.php'>Volver a la pagina principal</a>");

    mysqli_close($link);
?>

</body>
</html>