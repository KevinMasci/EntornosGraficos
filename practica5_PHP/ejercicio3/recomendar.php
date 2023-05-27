<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $amigo = $_POST["amigo"];

        $destinatario = "amigo";
        $asunto = "Recomendacion de sitio web";

        $contenido = "Hola " . $amigo . ",\n\n" .
        $nombre . " te ha recomendado visitar nuestro sitio web.\nPuedes encontrar más información en http://www.ejemplo.com";

        $headers = "From: " . $correo . "\r\n";
        $headers .= "Reply-To: " . $correo . "\r\n";

        if (mail($destinatario, $asunto, $contenido, $headers))
        {
            echo "Tu recomendacion se ha enviado";
        } else
        {
            echo "Error al enviar el mensaje";
        }
    }

?>