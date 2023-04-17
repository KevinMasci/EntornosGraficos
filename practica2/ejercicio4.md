## Ejercicio 4
Dado
```
* {color:green; }
a:link {color:gray }
a:visited{color:blue }
a:hover {color:fuchsia }
a:active {color:red }
p {font-family: arial,helvetica;font-size: 10px;color:black; }
.contenido{font-size: 14px;font-weight: bold; }
```
```
<body>
<p class="contenido" style="font-weight: normal;">
Este es un texto ...............</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con un
enlace</a></td>
</tr>
</table>
</body>
```
```
<body class="contenido">
<p> Este es un texto................</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con un enlace</a></td>
</tr>
</table>
</body>
```
En el primer bloque de codigo la clase "contenido" esta en el parrafo por lo que el estilo de esa clase solo se aplicara a ese parrafo.
En el segundo bloque de codigo la clase "contenido" esta en el body por lo que el estilo se va a aplicar a todas las etiquetas del body.