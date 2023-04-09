# 1. ¿ Qué es CSS y para qué se usa?
CSS son las siglas de **Cascade Style Sheet** que traducido significa hojas de estilo en
cascada. Las hojas de estilo es una tecnología que nos permite controlar la apariencia de una
página web. Con CSS podemos especificar estilos como el tamaño, fuentes, color, espaciado entre
textos y recuadros así como el lugar donde disponer texto e imágenes en la página.

# 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?
La sintaxis básica de una regla de CSS esta compuesta por un selector seguido de una declaracion. A su vez la declaracion esta compuesta por una o mas propiedades y sus respectivos valores.
```
selector {
  propiedad: valor;
  propiedad: valor;
  ...
}
```
Además de los selectores simples, como el elemento HTML, se pueden utilizar selectores más complejos, como las clases y los identificadores. Por ejemplo:
```
.clase {
  color: red;
}

#identificador {
  font-size: 20px;
}
```

# 3. ¿ Cuáles son las tres formas de dar estilo a un documento?
### CSS externo
Utilizando una hoja de estilo externa vinculada al documento a traves del elemento `<link>`, el cual esta situado en la seccion `<head>`.
Por ejemplo:
```
<head>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
```

### CSS incorporado
Esto implica agregar estilos directamente en la etiqueta `<head>` del documento HTML mediante el uso de la etiqueta `<style>`. Los estilos se aplicarán a todo el documento. Por ejemplo:
```
<head>
  <style>
    h1 {
      color: blue;
    }
  </style>
</head>
```

### CSS en linea
Los estilos se agregan directamente en la etiqueta HTML utilizando el atributo style. Los estilos se aplicarán solo a ese elemento HTML en particular. Por ejemplo:
```
<h1 style="color: blue;">Este encabezado es de color azul.</h1>
```

# 4. ¿ Cuáles son los distintos tipos de selectores más utilizados?

- Selector de elemento: selecciona todos los elementos HTML de un tipo específico. Por ejemplo, el selector h1 selecciona todos los encabezados `<h1>` en la página.

- Selector de clase: selecciona todos los elementos que tienen un valor específico en el atributo class. Se utiliza el punto (.) seguido del nombre de la clase. Por ejemplo, el selector .clase selecciona todos los elementos que tienen la clase "clase".

- Selector de ID: selecciona un elemento específico según el valor del atributo id. Se utiliza el símbolo de numeral (#) seguido del nombre del ID. Por ejemplo, el selector #id selecciona el elemento con el ID "id".

- Selector de descendiente: selecciona un elemento secundario que es descendiente directo de un elemento padre. Se utiliza un espacio para separar los selectores. Por ejemplo, el selector div p selecciona todos los elementos `<p>` que son descendientes directos de elementos `<div>`.

- Selector de hijo directo: selecciona un elemento hijo directo de un elemento padre. Se utiliza el signo mayor que (>) para separar los selectores. Por ejemplo, el selector div > p selecciona todos los elementos `<p>` que son hijos directos de elementos `<div>`.

- Selector de atributo: selecciona elementos que tienen un atributo específico y, opcionalmente, un valor específico. Se utiliza corchetes para definir el selector. Por ejemplo, el selector `[type="text"]` selecciona todos los elementos que tienen el atributo type con el valor "text".