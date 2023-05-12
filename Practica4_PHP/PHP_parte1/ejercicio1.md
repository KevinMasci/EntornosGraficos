## Ejercicio 1
```
<?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?> 
```
Variables:<br>
| Variable | Tipo       |
|----------|------------|
| a        | boolean    |
| b        | string     |
| c        | string     |
| d        | integer    |
| f        | integer    |
| g        | integer    |

<br>
Operadores:<br>

| Operador                       | Funcion              |
|--------------------------------|----------------------|
| =                              | asignacion           |
| +=                             | asignacion compuesto |
| ++$d                           | preincremento        |
| *                              | multiplicador        |
| $d++                           | postincremento       |
|$d = $a ? ++$d : $d*3           | operador ternario    |

<br>
Funciones:

| Funcion  | Parametros       |
|----------|------------|
| doble()        | $i    |
| gettype()        | $a, $b, $c, $d     |
| is_int()        | $d     |
| is_string()        | $a    |
| f        | integer    |
| g        | integer    |

<br>
Estructuras de control:

```
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
```
Salida por pantalla:
boolean
string
string
integer
1
xyz
xyz
18
44
44