<?php

    include('conexion.php');

    $id = $_GET['id'];

    $query = "DELETE FROM ciudades  WHERE id = '$id'";
    mysqli_query($link, $query) or die(mysqli_error($link));
    mysqli_close($link);
    header("Location: index.php");
?>