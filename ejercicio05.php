<!-- IMPRIMIR POR PANTALLA LA TABLA DE MULTIPLICAR DEL NUMERO PASADO EN UN PARAMETRO GET POR LA URL-->
<h1>EJERCICIO 05</h1>
<?php
        // ejercicio05.php
        // Verificar si se ha pasado un número por GET y es numérico, de lo contrario usar 5 como valor por defecto.
        if(isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
            $numero =  $_GET["numero"];
        }else{
            // Si no se ha pasado un número, asignar 5 por defecto.
            // Esto es útil para evitar errores si el parámetro no está presente o no es un número.
            // Por ejemplo, si se accede a la URL sin el parámetro "numero",
            $numero = 5;
        }

        // Imprimir la tabla de multiplicar del número especificado.
        // Se utiliza un bucle for para iterar desde 1 hasta 100, multiplicando cada número por el número especificado.
        // El resultado se imprime en formato "i x numero = resultado".
        echo "<h2>Tabla de multiplicar del $numero</h2>";
        for ($i = 1; $i <= 30; $i++) {
            echo $i." x ".$numero." = ".($i * $numero)."<br>";
        }
        
?>