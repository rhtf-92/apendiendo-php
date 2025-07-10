<!-- Escribir un programa que calcule un factorial de cualquier numero almacenado en una variable -->
<h1>EJERCICIO 08</h1>
<?php
    // ejercicio08.php
    $factorial = 1;
    $numero = 5; // Puedes cambiar este número para calcular el factorial de otro valor.

    for($cont=1; $cont <= $numero; $cont++) {
        // Calcular el factorial de un número almacenado en una variable.
        // El factorial de un número n es el producto de todos los números enteros desde 1 hasta n.
        // Por ejemplo, el factorial de 5 (5!) es 5 * 4 * 3 * 2 * 1 = 120.
        $factorial *= $cont;
    }
    echo "El factorial de $numero es: $factorial";
?>