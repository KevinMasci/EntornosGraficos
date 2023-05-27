<?php

    session_start();

    //Creo un arreglo para almacenar las uri del sitio
    $_SESSION["contador_paginas"] = array();

    //Obtener url atual
    $url_actual = $_SERVER["REQUEST_URI"];

    // Verificar si la página actual ya ha sido visitada en esta sesión
    if (!isset($_SESSION['paginas_visitadas'][$url_actual])) 
    {
        // Si no ha sido visitada, inicializar su contador en 1
        $_SESSION['paginas_visitadas'][$url_actual] = 1;
    } else 
    {
    // Si ya ha sido visitada, incrementar su contador en 1
    $_SESSION['paginas_visitadas'][$url_actual]++;
    }

    // Obtener el número total de visitas de la página actual
    $visitas_pagina_actual = $_SESSION['paginas_visitadas'][$url_actual];

    // Mostrar la cantidad de visitas de la página actual
    echo "Visitas a esta página: " . $visitas_pagina_actual;

?>