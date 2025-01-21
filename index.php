<!DOCTYPE html>
<html>
    <body>
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
        echo "Conectado <br>";

        // Crear una nueva base de datos y se verifica tambien de no sobre escribir una existente 
        // $sql = "CREATE DATABASE IF NOT EXISTS cursophp";
        // if (mysqli_query($conexion, $sql)) {
        //     echo "Base de datos creada o ya existente"; 
        // } else {
        //     echo "Error de creacion " . mysqli_error($conexion);
        // }

        // Seleccionar la base de datos para despues poder crear la tabla 'empleados' 
        if (!mysqli_select_db($conexion, "cursophp")) {
            die("Error seleccionando la base de datos: " . mysqli_error($conexion));
        }

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
            $sql = "INSERT INTO empleados (nombre, apellidos, email)
            VALUES ('Mariano', 'Calatrava', 'mcalatrava@example.com')";
            
            if (mysqli_query($conexion, $sql)) {
                echo "Nueva entrada creada para tabla empleados <br>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
            
        
        mysqli_close($conexion); // sentencia que cierra el llamado a la bd 
        ?>
    </body>
</html>
