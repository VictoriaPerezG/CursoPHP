<?php
    // CAPÍTULO 6 ⮞ Manejo de bases de datos con PHP

    // Conexion a la base de datos con php 

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Crea la conexion 
    $conexion = mysqli_connect($servername, $username, $password);

    // Comprueba si la conexion se realizo correctamente 
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    echo "Conectado al motor de bd <br>";

    // Crear una nueva base de datos y se verifica tambien de no sobre escribir una existente 
    // $sql = "CREATE DATABASE IF NOT EXISTS cursophp";
    // if (mysqli_query($conexion, $sql)) {
    //     echo "Base de datos creada o ya existente"; 
    // } else {
    //     echo "Error de creacion " . mysqli_error($conexion);
    // }

    // Seleccionar la base de datos para despues poder crear la tabla 'empleados' 
    $dbname = "cursophp";
    if (!mysqli_select_db($conexion, $dbname)) {
        die("Error seleccionando la base de datos: " . mysqli_error($conexion));
    }
    echo "Conectado a la bd: " . $dbname . " <br>";

    // Se crea la tabla 'empleados'
    // $sql = "CREATE TABLE empleados (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     nombre VARCHAR(30) NOT NULL,
    //     apellidos VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //     )ENGINE=InnoDB; ";

    //     if (mysqli_query($conexion, $sql)) {
    //         echo "Tabla empleados creada <br>";
    //     } else {
    //         echo "Error de creacion de tabla: " . mysqli_error($conexion);
    //     }

    // Insertar datos en la tabla
    // $sql = "INSERT INTO empleados (nombre, apellidos, email)
    // VALUES ('Victoria', 'gonzalez', 'vickypgc@example.com')";

    // if (mysqli_query($conexion, $sql)) {
    //     echo "Nueva entrada creada para tabla empleados <br>";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    // }


    // Leyendo datos y haciendo peticiones sql 
    // $sql = "SELECT nombre, apellidos, email FROM empleados WHERE ID=2";
    // $result = mysqli_query($conexion, $sql);

    // Verifica si hay resultados
    // if (mysqli_num_rows($result) > 0) {
    //     // Recupera los datos de la fila
    //     $row = mysqli_fetch_assoc($result);
    //     // Muestra los datos en la página
    //     echo "Nombre: " . $row['nombre'] . "<br>";
    //     echo "Apellidos: " . $row['apellidos'] . "<br>";
    //     echo "Email: " . $row['email'] . "<br>";
    // } else {
    //     echo "No se encontraron resultados.";
    // }

    // Actualizando datos 
    // $sql = "UPDATE empleados SET apellidos='Pérez' WHERE id=2" ;
    // if (mysqli_query($conexion, $sql)) {
    //     echo "Actualizado";
    // } else {
    //     echo "Error de actualizacion: " . mysqli_error($conexion); }

    // Prepara la consulta para evitar inyecciones SQL
    // $sql = "UPDATE empleados SET apellidos=? WHERE id=?";
    // $stmt = mysqli_prepare($conexion, $sql);

    // Vincula los parámetros (en este caso, apellidos y id)
    // $apellido = "Pérez";
    // $id = 2;
    // mysqli_stmt_bind_param($stmt, "si", $apellido, $id); // "s" para string, "i" para integer

    // Ejecuta la consulta preparada
    // if (mysqli_stmt_execute($stmt)) {
    //     // Verifica si se afectó alguna fila
    //     if (mysqli_stmt_affected_rows($stmt) > 0) {
    //         echo "Registro actualizado correctamente. <br> ";
    //     } else {
    //         echo "No se encontró ningún registro con el ID especificado o no hubo cambios. <br>";
    //     }
    // } else {
    //     echo "Error de actualización: " . mysqli_error($conexion);
    // }

    // Cierra la consulta preparada
    // mysqli_stmt_close($stmt);

    // Borrando datos de la bd
    // $sql = "DELETE FROM empleados WHERE ID=4";
    // if (mysqli_query($conexion, $sql)) {
    //     echo "Borrado";
    // } else {
    //     echo "Error de borrado: " . mysqli_error($conn);
    // }

    // Prepara la consulta para evitar inyecciones SQL
    // $sql = "DELETE FROM empleados WHERE id=?";
    // $stmt = mysqli_prepare($conexion, $sql);

    // Vincula los parámetros (en este caso, el ID)
    // $id = 4;
    // mysqli_stmt_bind_param($stmt, "i", $id); // "i" indica que es un entero

    // Ejecuta la consulta preparada
    // if (mysqli_stmt_execute($stmt)) {
    //     // Verifica si se eliminó algún registro
    //     if (mysqli_stmt_affected_rows($stmt) > 0) {
    //         echo "Registro eliminado correctamente.";
    //     } else {
    //         echo "No se encontró ningún registro con el ID especificado.";
    //     }
    // } else {
    //     echo "Error al intentar borrar el registro: " . mysqli_error($conexion);
    // }

    // Cierra la consulta preparada
    // mysqli_stmt_close($stmt);


    mysqli_close($conexion); // sentencia que cierra el llamado a la bd 
    ?>