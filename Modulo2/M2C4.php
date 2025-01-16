<?php 
// Formularios en php 
// en un archivo html si se utiliza  -- include -- en el codigo y este no encuentra el archivo este no mostrata error 
// pero al utilizar -- require -- y el archivo no se encuentra saltara error 


// $miarchivo = fopen("texto.txt",'r') // abre el archivo y lo muestra por pantalla, 'r' que es solo lectura 
// or die ("No se puede abrir"); // msm de que la funcion no se pudo abrir 

// echo fread($miarchivo, filesize("texto.txt")); // esto pása si se puede abrir y que muestre el contenido del archivo 
// fclose($miarchivo); // y finalmente lo cierra 

// <p>Esto sera ignorado por php y mostrado en el navegador</p>
// echo 'Mientras que esto va a ser interpretado'; 
// <p>Esto tambien sera ignorado por php y mostrado en el navegador </p> -->



// $expresión = true; 
// if ($expresión == true) : 
// Esto se mostrará si la expresión es verdadera.
// <?php else: 
// En caso contrario se mostrará esto.
// <?php endif; 

// $_GET y $_POST variables superglobales y son necesaria para la obtencion y envio de datos
?>

Hola <?php echo $_POST['nombre' ]; ?>.
Tienes <?php echo $_POST['edad']; ?> años.