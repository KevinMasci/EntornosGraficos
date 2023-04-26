### a
`<a href="http://www.google.com.ar">Click aquí para ir a Google</a>`
link a la página de google abriendo en la misma pestaña.

`<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>`
link a la página de google abriendo una pestaña nueva.

`<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">`
no se visualiza , no tiene etiqueta de cierre.

`<a href="#">Click aquí para ir a Google</a>`
ancla vacía, se visualiza el contenido.

`<a href="#arriba">Click aquí para volver arriba</a>`
ancla al punto de anclaje “arriba”, se visualiza el contenido.

`<a name="arriba" id="arriba"></a>`
punto de anclaje “arriba”, no se visualiza.

### b
`<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p>`
imagen seguida de un enlace a google `(<img/><a></a>)`

`<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p>`
Imágen con un enlace a google seguido de un texto sin enlace. la etiqueta de imagen está dentro de la etiqueta de enlace pero el texto está fuera `(<p><a><img/></a>texto</p>)`

`<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p>`
Imagen y texto con un enlace a google. la etiqueta de imagen está dentro de la etiqueta de enlace y el texto también `(<p><a><img/>texto</a></p>)`

`<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>`
Imagen y texto con enlaces por separado. `(<p><a><img/></a><a>texto</a></p>)`

## c
```
<ul>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ul>
```
lista no ordenada
```
<ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ol>
```
lista ordenada
```
<ol>
    <li>xxx</li>
</ol>
<ol>
    <li value="2">yyy</li>
</ol>
<ol>
    <li value="3">zzz</li>
</ol>
```
tres listas ordenadas con un solo item cada una.
```
<blockquote>
<p>1. xxx<br/>
2. yyy<br/>
3. zzz</p>
</blockquote>
```
cita en bloque. se visualizará algo parecido a una lista pero solo es texto.

## d
```
<table border="1" width="300">
    <tr>
        <th>Columna 1</th>
        <th>Columna 2</th>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
Tabla con bordes separados, 2 columnas con encabezados y 2 filas con datos
```
<table border="1" width="300">
    <tr>
        <td><div align="center"><strong>Columna 1</strong></div></td>
        <td><div align="center"><strong>Columna 2</strong></div></td>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
Tabla con bordes separados, 2 columnas y 3 filas. La primera fila simula visualmente un encabezado usando un div con align y la etiqueta strong para ponerlo en negrita.

## e
```
<table width="200">
    <caption>Título</caption>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
        <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Tabla con titulo, tres columnas y dos filas con fondo gris.
```
<table width="200">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Tabla con tres columnas y tres filas, la primera fila esta simulando visualmente un titulo
usando colspan y un div con align.

## f
```
<table width="200">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
<table width="200">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```
Ambas son tablas con 3 columnas y 3 filas, con la primera fila simulando un titulo como en el apartado e. La diferencia es que en la primera tabla se juntan las celdas 2 y 3 de la primera columna con rowspan, y en la segunda tabla se juntan la celda 2 de las columnas 1 y 2 con colspan.

## g
```
<table width="200" border="1">
    <tr>
        <td colspan="3"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
<table width="200" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2"><div align="center">Título</div></td>
    </tr>
    <tr>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
```
Ambas son tablas de tres filas con la primera haciendo de titulo y las 2 celdas de la primera columnas juntas en una. La unica diferencia visual es que la primera tabla tiene bordes separados y la segunda tiene bordes unidos usando los atributos de tabla `cellpading=0` y `cellspacing=0`

## h
```
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
        Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
    </fieldset>
    <input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
<form id="form2" name="form2" action="" method="get" target="_blank">
    LOGIN<br />
    <label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
    <label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
    <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
<form id="form3" name="form3" action="mailto:xx@xx.com" method="post" enctype="text/plain" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu3" name="usu3" /><br />
        Clave: <input type="password" id="clave3" name="clave3" />
    </fieldset>
        <input type="reset" id="boton3" name="boton3" value="Enviar" />
</form>
```
El primero es un formulario dentro de un bloque `<fieldset>` que tiene una leyenda y dos campos usuario y clave ambos con atributo value por lo que se podran ver esos valores predefinidos. Fuera del fieldset hay un boton enviar de tipo submit. El atributo action es "procesar.php" y el method post.
El segundo codigo es un formulario pero sin bloque `<fieldset>`, tambien tiene una leyenda y dos campos usuario y clave pero sin atributo value por lo cual estaran vacios. Tambien posee un boton enviar. El atributo action del form esta vacio y el metodo es get
El ultimo segmento de codigo es un formulario dentro de un bloque `<fieldset>` al igual que el primero. Las diferencias son que en este form el atributo action es "mailto:xx@xx.com" con method post y enctype="text/plain". En este caso el boton enviar es de tipo reset.

## i
```
<label>Botón 1
        <button type="button" name="boton1" id="boton1"><img src="logo.jpg" alt="Botón con imagen " width="30" height="20" /><br />
        <b>CLICK AQUÍ</b></button>
</label>
<label>Botón 2
    <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```
Ambos son botones con una etiqueta. La diferencia es que el primero contiene una imagen dentro del boton con un texto en negrita y el segundo es solo el texto sin imagen.

## j
```
<p><label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
    <label><input type="radio" name="opcion" id="Y" value="Y" />Y</label></p>
<p><label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
    <label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label></p>
```
Se van a ver 4 radio buttons. Los dos primeros X e Y estan en el mismo grupo ya que tienen el mismo nombre como atributo, por esto al seleccionar uno se va a quitar la seleccion del otro. Los otros dos botones estan en diferentes grupos ya que sus atributos de nombre son diferentes y se podran seleccionar los dos a la vez.

## k
```
<select name="lista">
    <optgroup label="Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select><br>
<select name="lista[]" multiple="multiple">
    <optgroup label=" Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label=" Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    </select>
```
La primera es una lista desplegable con dos subcategorias. Solo se puede elegir una opcion.
La segunda es una lista igual a la primera pero con la diferencia de que se pueden elegir multiples opciones ya que tiene el atributo `multiple="multiple"`