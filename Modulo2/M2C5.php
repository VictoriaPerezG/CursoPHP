<!DOCTYPE html> 
<html>
    <body>
        <?php
        // Capitulo 5 - Funciones 

        // las funciones a diferencia de las variables no son sensitive case 

        // function exponente(int $a, int $b){
        //     $exp = $a ** $b; 
        //     return $exp; 
        // }

        // echo "2^3 = " . exponente(2,3) . "<br>";
        // echo "9^0 = " . exponente(9,0) . "<br>";
        // echo "5^1 = " . exponente(5,1) . "<br>";

     
        //todas las funciones tienen parametros infinitos solo que hay que separarlos por comas 
        // function registro($a, $b) {
        // $reg = "Se llama " .$a. " y apellida " .$b;
        // return $reg;}

        // echo registro("Gabriela","García"). "<br>";
        // echo registro("Maricarmen", "Pérez"). "<br>";
        // echo registro("Jennifer" , "Lawpes");

        // las variables declaradas dentro de una funcion son locales y solo se púede acceder a ellas dentro de una funcion 
        // fuera de las funciones son globales y se acceden fueran de las funciones
        // $x = 5;
        // function prueba() {

        //     global $x; //para poder hacer que la funcion usea una variable global sin que de error 
        //     echo "<p> El valor de x dentro de la funcion es: $x</p>"; // error 
        // }
        // prueba();

        // echo "<p> El valor de x dentro de la funcion es: $x</p>"; // bien  

        function prueba() {
            static $a = 0; // mantendrá su valor entre las distintas llamadas a la función. 
            $a++;
            
            }
            
            prueba();
            echo "<br>";
            prueba();
            echo "<br>";
            prueba();
            
            /*para poder incrementar el valor en cada Llamada debemos guardar el
            valor de a desde dentro de la función*/


        ?>
    </body>
</html>