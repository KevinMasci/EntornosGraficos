a) `<!-- Código controlado el día 12/08/2009 →` <br>
Este segmento de código es un comentario HTML y se coloca en cualquier parte del documento. Los comentarios no tienen ningún efecto en la representación visual de la página web y se utilizan para agregar notas y explicaciones para los desarrolladores. El texto en sí mismo no tiene elementos, etiquetas ni atributos.

b) `<div id="bloque1">Contenido del bloque1</div>`<br>
etiqueta: `<div></div>`
atributos:<br>
nombres: id<br>
valor: bloque1

Este segmento de código crea un elemento de bloque `<div>` con el atributo id con valor "bloque1". El contenido del bloque se define como "Contenido del bloque1". El atributo id se utiliza para identificar de manera única el elemento en el documento y puede ser utilizado en CSS y JavaScript para aplicar estilos o manipular el contenido del elemento. Este elemento se puede colocar en cualquier sección del documento HTML, como en el `<body>`.

c) `<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />`<br>
etiquetas: `<img/>`<br>
atributos:<br>
nombres: src (obligatorio), alt, id, name, width, height, longdesc<br>
valores: “”, lugar imagen, im1, im1, 32, 32, detalles.htm

Este es un ejemplo de un elemento img que se utiliza para insertar una imagen en el documento HTML. Se puede colocar en cualquier sección del documento donde se desee mostrar la imagen.

d) `<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />` <br> `<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />`<br>
etiquetas: `<meta/>`<br>
atributos:<br>
nombres: name, lang, content, http-equiv<br>
valores: keyword, es, [casa, compra, venta, alquiler], expires, 16-Sep-2019 7:49 PM

Estos dos segmentos de código se colocan en la sección `<head>` del documento HTML.

El primer segmento, `<meta name="keywords">`, es utilizado para especificar palabras clave que describen el contenido de la página El atributo "lang" se utiliza para especificar el idioma de las palabras clave (en este caso, español).

El segundo segmento se utiliza para especificar la fecha y hora de vencimiento de la página. El atributo "http-equiv" se utiliza para indicar que se está estableciendo un encabezado HTTP para la página.

e) `<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>`<br>
etiqueta: `<a></a>`<br>
atributos:<br>
nombre: href (obligatorio), type, hreflang, charset, rel<br>
valor: http://www.e-style.com.ar/resumen.html, text/html, es, utf-8, help<br>
contenido: Resumen HTML

Este segmento de código es una etiqueta de enlace. Esta etiqueta se puede colocar en cualquier sección del documento HTML, pero generalmente se coloca dentro del cuerpo (<body>) del documento.

f)
```
<table width="200" summary="Datos correspondientes al ejercicio vencido">
    <caption align="top"> Título </caption>
    <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
    </tr>
    <tr>
        <th scope="row">1º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th scope="row">2º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
```

etiquetas: 
```
<table></table>
<caption></caption>
<tr></tr>
<th></th>
<td></td>
```
atributos:<br>
nombres: width, summary, align, scope<br>
valores: 200, Datos correspondientes al ejercicio vencido, top, col/row

Este código representa una tabla con un ancho de 200 píxeles y un resumen que describe los datos que contiene. La tabla tiene un título que se alinea en la parte superior y tres columnas identificadas como A, B y C. Las dos primeras filas contienen números y celdas vacías. Se utiliza la etiqueta <th> para identificar las celdas de encabezado y la etiqueta <td> para las celdas de datos. El atributo "scope" de la etiqueta <th> se utiliza para especificar si el encabezado se aplica a una columna ("col") o una fila ("row").
