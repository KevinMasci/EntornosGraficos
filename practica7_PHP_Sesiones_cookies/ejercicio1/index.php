<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

if (isset($_COOKIE["estilo"])){
    echo '<link rel="stylesheet" type="text/css" href="'.$_COOKIE["estilo"].'.css">';
}

?>
</head>
<body>
<h1>Cambiar Estilo</h1>
    <form action="cambiarEstilo.php" method="POST">
        <select name="estilo">
            <option value="rojo">Rojo
            <option value="verde">verde
            <option value="azul">azul   
        </select>
<input type="submit" value="Actualizar Color de página">
    </form>
    
</body>
</html>