<?php
    // Capitulo 7 - Testing php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    // crear conexion
    $conexion = mysqli_connect($servername, $username, $password);
    // Comprobar conexion
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    echo "Conexión establecida con éxito.<br>";

    function manejaErrores($errnum, $errstr)
    {
        echo "<b>Error :< /b> [$errnum] $errstr<br>";
        echo "Terminando";
        die();
    }

    //establecer la mía como predeterminada
    set_error_handler("manejaErrores");

    // Probar un error para verificar el manejo (puedes comentar esto en producción)
    if (!isset($test)) {
        trigger_error("La variable 'test' no está definida.", E_USER_NOTICE);
    }

    mysqli_close($conexion);
    ?>