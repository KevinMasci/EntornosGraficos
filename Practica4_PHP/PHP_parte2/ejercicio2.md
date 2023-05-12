## Ejercicio 2
### a)
```
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
```
La salida por pantalla es "bar 1". Matriz es un array con dos elementos.
#
### b)
```
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>
```
La salida por pantalla es "5 9 42". Matriz es un array con un solo elemento el cual es a su vez otro array con 3 elementos.
#
### c)
```
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?>
```
Primero se crea el arreglo matriz con dos elementos, luego se le agrega otro elementos que tomara un clave automatico '13' y otro con clave 'x'. Finalmente, usando unset, se elimina en primer lugar el elemento con clave '5' y luego se elimina todo el array.