# 1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?
HTML (HyperText Markup Language) es un lenguaje de marcado utilizado para crear y estructurar el contenido de las páginas web. Fue creado en 1990 por Tim Berners-Lee, mientras trabajaba en el CERN (Organización Europea para la Investigación Nuclear).

Desde su creación, se han lanzado varias versiones de HTML, cada una con mejoras y nuevas características. Estas son algunas de las versiones más importantes:

- HTML 2.0: Lanzado en 1995, incluyó nuevas características como tablas y formularios.
- HTML 3.2: Lanzado en 1997, mejoró el soporte para hojas de estilo y tablas.
- HTML 4.01: Lanzado en 1999, incluyó mejoras en la semántica, soporte para marcos (frames) y hojas de estilo en cascada (CSS).
- XHTML 1.0: Lanzado en 2000, fue una versión más estricta y modular de HTML, basada en XML.
- HTML5: Lanzado en 2014, es la última versión de HTML y proporciona nuevas características como el soporte para multimedia, gráficos y animaciones, así como una semántica más clara y mejoras en accesibilidad.

# 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?
- **Compatibilidad**:
    - Dar soporte a contenido existente: debería ser posible procesar documentos HTML existentes como HTML5 y obtener resultados que sean compatibles con las expectativas de los usuarios y autores
    - Degradar de forma elegante: los requisitos de conformidad del documento HTML5 deben diseñarse de tal manera que el contenido web pueda degradarse de forma elegante en agentes de usuario más antiguos o menos capaces.
    - No reinventar la rueda: Si ya existe una tecnología ampliamente utilizada e implementada que cubre casos de uso específicos, considere especificar esa tecnología en lugar de inventar algo nuevo para el mismo propósito.
    - Pave the Cowpaths: Cuando una práctica ya está ampliamente extendida entre los autores, considere adoptarla en lugar de prohibir o inventar algo nuevo.
    - Evolución en vez de revolución: diseñar características de tal manera que el contenido antiguo pueda aprovechar las nuevas características sin tener que realizar cambios no relacionados. Las implementaciones deberían ser capaces de agregar nuevas características al código existente, en lugar de tener que desarrollar modos completamente separados.
- **Utilidad**:
    - Resolver problemas reales
    - Prioridad de los constituyentes: En caso de conflicto, considere a los usuarios por encima de los autores, a los implementadores por encima de los especificadores y a la pureza teórica.
    - Seguridad por diseño: Asegúrese de que las características funcionen con el modelo de seguridad de la web.
    - Separación de responsabilidades: permitir la separación del contenido y la presentación. Se prefiere el marcado que expresa la estructura en lugar del marcado puramente presentacional.
    - Consistencia del DOM: Las dos serializaciones deben diseñarse de tal manera que los árboles DOM producidos por los respectivos analizadores aparezcan de manera consistente y factible para los scripts y otro    código de programa que opera en los árboles de documento.
- **Interoperabilidad**:
    - Comportamiento bien definido:Preferir definir claramente el comportamiento en el que los autores de contenido pueden confiar, en lugar de un comportamiento vago o definido por la implementación.
    - Evitar complejidad innecesaria
    - Manejar errores

- **Acceso universal**:
    - Independencia del medio: Las características deberían, cuando sea posible, funcionar en diferentes plataformas, dispositivos y medios.
    - Dar soporte a idiomas del mundo: debería admitir idiomas de todo el mundo.
    - Accesibilidad: diseñar características que sean accesibles a usuarios con discapacidades.

# 3 En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?
En las especificaciones de HTML, un elemento o atributo se considera **desaprobado** cuando se considera que **no se debe utilizar más, pero todavía se admite** por razones de compatibilidad con versiones anteriores del lenguaje. Esto significa que el elemento o atributo puede seguir funcionando en algunos navegadores, pero se recomienda no utilizarlo en nuevos proyectos, ya que podría ser eliminado en futuras versiones de HTML.

Por otro lado, un elemento o atributo se considera **obsoleto** (también conocido como deprecated en inglés) cuando **ya no se admite en la especificación actual de HTML y se considera que no se debe utilizar en absoluto**. Los elementos o atributos obsoletos se han eliminado por completo de la especificación y pueden provocar errores o problemas de compatibilidad si se utilizan en un documento HTML.

# 4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?
DTD (del inglés "Document Type Definition") es una declaración que define la estructura y los tipos de elementos que se pueden utilizar en un documento HTML.

En la especificación de HTML 4.01, se contemplan tres tipos de DTDs:

**Strict**: Este DTD define una versión estricta de HTML 4.01 en la que se prohíben todas las características obsoletas y se desaconseja el uso de elementos y atributos presentacionales. Esto ayuda a garantizar que el documento tenga una estructura clara y coherente.

**Transitional**: Este DTD es una versión de HTML 4.01 que permite el uso de características obsoletas y elementos y atributos presentacionales, lo que facilita la transición de documentos HTML antiguos a HTML 4.01.

**Frameset**: Este DTD se utiliza para documentos que contienen marcos. Es similar al DTD Transitional, pero incluye elementos y atributos adicionales que son necesarios para definir la estructura de marcos.

# 5. Qué son los metadatos y cómo se especifican en HTML?
Los metadatos son información adicional sobre el contenido de una página web, como el autor, la fecha de creación, las palabras clave, la descripción y la codificación de caracteres. Los metadatos se pueden especificar en HTML utilizando el elemento `<meta>`, que se coloca dentro de la sección `<head>` del documento HTML.

El atributo name del elemento `<meta>` se utiliza para especificar el tipo de metadato, como author para el autor, keywords para las palabras clave y description para la descripción de la página. El atributo content se utiliza para especificar el valor del metadato.