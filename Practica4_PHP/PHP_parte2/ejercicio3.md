## Ejercicio 3
### a)
```
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
`$fun` es un array donde se guardaran los datos de la fecha y hora actual (utiliza la config del servidor), al cual se puede acceder con las claves correspondientes.
#
### b)
```
<?php
function sumar($sumando1,$sumando2){
 $suma=$sumando1+$sumando2;
 echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
```
El codigo es una funcion que toma dos numeros como parametro y los suma para luego imprimir en pantalla el resultado.