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

