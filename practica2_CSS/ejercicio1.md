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

# 5. ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?
En CSS, una pseudoclase es una palabra clave que se agrega a un selector y que especifica un estado especial del elemento seleccionado. Las pseudoclases se utilizan para aplicar estilos a elementos HTML que se encuentran en un estado específico o que se comportan de una manera específica, como cuando el usuario interactúa con ellos. Las pseudoclases se indican mediante el signo de dos puntos (:) después del selector.<br>
Algunas de las pseudoclases más comunes para los vínculos son:

- :link: se aplica a los vínculos que aún no han sido visitados por el usuario.
- :visited: se aplica a los vínculos que ya han sido visitados por el usuario.
- :hover: se aplica cuando el usuario coloca el cursor sobre el vínculo.
- :active: se aplica cuando el usuario hace clic en el vínculo.

# 6. ¿ Qué es la herencia?
En CSS, la herencia es un mecanismo que permite que los estilos se apliquen automáticamente a los elementos secundarios de un elemento padre. Cuando se establece un estilo en un elemento, este estilo se puede heredar por los elementos secundarios que no tienen su propio estilo específico para esa propiedad. Esto significa que no es necesario aplicar estilos a cada elemento individual en una página web; en cambio, se pueden establecer estilos en elementos específicos y permitir que estos estilos se hereden automáticamente en los elementos secundarios.

# 7. ¿ En qué consiste el proceso denominado cascada?
El proceso de cascada en CSS es la forma en que se determina qué estilos se aplican a un elemento específico cuando hay varios estilos que se aplican al mismo elemento. La cascada se basa en un conjunto de reglas que determinan el orden en que se aplican los estilos y cómo se resuelven los conflictos entre diferentes estilos.<br>
El proceso de cascada en CSS se divide en tres partes:

- Especificidad: este es el primer nivel de la cascada. La especificidad es un valor numérico que se asigna a un selector y determina qué estilo tiene prioridad en caso de que haya conflictos entre diferentes estilos que se aplican al mismo elemento. Los selectores más específicos tienen una prioridad más alta que los selectores menos específicos. Por ejemplo, un estilo que se aplica a un selector de ID (#mi-id) tiene una mayor especificidad que un estilo que se aplica a un selector de clase (.mi-clase).

- Origen: este es el segundo nivel de la cascada. El origen se refiere al lugar donde se define un estilo en el documento CSS. Los estilos que se definen en un archivo CSS externo tienen una prioridad más baja que los estilos que se definen en línea (usando el atributo style) o dentro de una etiqueta `<style>` en el documento HTML.

- Orden: este es el tercer y último nivel de la cascada. El orden se refiere al orden en que se definen los estilos. Los estilos que se definen más tarde tienen una prioridad más alta que los estilos que se definen anteriormente. Por ejemplo, si hay dos reglas que establecen el color de fondo de un elemento, la última regla que se define tendrá prioridad sobre la primera.