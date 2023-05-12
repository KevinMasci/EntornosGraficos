## Ejercicio 4
```
<?php
function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
} 
```
Es una funcion para comprobar que el usuario ingresado sea correcto. En primer lugar comprueba con un if si el usuario tiene entre 3 y 20 caracteres. Luego, con un for y un if, va reccoriendo cada posicion del string y se fija si el caracter concuerda con alguno del string `$permitidos`.
Si todo esta OK se muetra un mensaje indicando que es valido y devuelve true.
<br><br>
Script para probar:
```
<?php
$nombre = "usuario123";
comprobar_nombre_usuario($nombre);
?>
```