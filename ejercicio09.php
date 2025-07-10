<!-- Mostrar todos los numero pares que hay entre 1 y el 100 -->
<h1>EJERCICIO 09</h1>
<?php
    // ejercicio09.php
    
    for ($i = 1; $i <= 100; $i++) {
        // Verificar si el número es par.
        // Un número es par si el resto de la división por 2 es igual a 0.
        if ($i % 2 == 0) {
            // Imprimir el número par.
            echo $i . " es PAR<br>";
        }else{
            // Imprimir el número impar.
            echo $i . " es IMPAR<br>";
        }
    }
?>