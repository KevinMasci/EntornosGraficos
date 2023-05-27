<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        $destinatario = "webmaster@x.com";
        $asunto = "Consulta";

        $contenido = "Nombre: " . $nombre . "\n";
        $contenido .= "Correo: " . $correo . "\n";
        $contenido .= "Mensaje: " . $mensaje;

        $headers = "From: " . $correo . "\r\n";
        $headers .= "Reply-To: " . $correo . "\r\n";

        if (mail($destinatario, $asunto, $contenido, $headers))
        {
            echo "Mensaje enviado";
        } else
        {
            echo "Error al enviar el mensaje";
        }
    }

?>