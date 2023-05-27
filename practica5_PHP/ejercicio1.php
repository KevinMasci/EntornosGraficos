<?php
    
    $to = 'x@x.com';
    $subject = 'Asunto del correo electrónico';
    
    $message = '
    <html>
    <head>
      <title>Ejemplo de correo electrónico</title>
    </head>
    <body>
      <h1>¡Hola!</h1>
      <p>Este es un ejemplo de correo electrónico en formato HTML.</p>
      <p>Puedes agregar contenido HTML personalizado aquí.</p>
    </body>
    </html>';
    
    
    // Envío del correo electrónico
    if (mail($to, $subject, $message)) {
      echo 'El correo electrónico se ha enviado correctamente.';
    } else {
      echo 'Hubo un error al enviar el correo electrónico.';
    }
?>