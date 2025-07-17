<!-- Mostrar los numero multiplos de un numero pasado por la URL que hay del 1 al 100 -->
<h1>EJERCICIO 10</h1>
<?php
    // ejercicio10.php
    
    for ($i = 1; $i <= 100; $i++) {
        // Verificar si se ha pasado un número por GET y es numérico, de lo contrario usar 5 como valor por defecto.
        if(isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
            $numero =  $_GET["numero"];
            
        }else{
            // Si no se ha pasado un número, asignar 5 por defecto.
            $numero = 5;
        }
        
        // Verificar si el número es múltiplo del número especificado.
        if ($i % $numero == 0) {
            // Imprimir el número si es múltiplo.
            // Un número es múltiplo de otro si el resto de la división es 0.
            // Por ejemplo, si el número es 5, los múltiplos son 5, 10, 15, etc.
            // Esto se logra utilizando el operador módulo (%).
            echo "<strong>".$i . " sí es múltiplo de " . $numero . "</strong><br/>";
        }else{
            // Imprimir el número si no es múltiplo.
            // Si el número no es múltiplo, se imprime un mensaje indicando que no lo es.
            // Por ejemplo, si el número es 5, los números que no son múltiplos son 1, 2, 3, 4, 6, 7, etc.
            // Esto se logra utilizando el operador módulo (%).
            echo $i . " no es múltiplo de " . $numero . "<br/>";
        }
    }
?>