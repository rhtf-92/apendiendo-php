<!-- Hacer un programa que tenga un array de 5 numero enteros y hacer lo siguiente: -->
 <!-- 1. RECORRERLO Y MOSTRARLO.
 2. ORDENARLO Y MOSTRARLO.
 3. MOSTRAR SU LONGITUD.
 4. BUSCAR EN EL VECTOR. -->
<h1>EJERCICIO 11</h1>
<?php
    // ejercicio11.php
    $numero = array(52, 37, 81, 19, 45);
    // 1. Recorrer el array y mostrarlo.
    echo "Array original:<br>";
    foreach ($numero as $num) {
        echo $num . "<br>";
    }
    // 2. Ordenar el array y mostrarlo.
    // Utilizar la función sort() para ordenar el array de forma ascendente.
    // La función sort() ordena los elementos del array en su lugar.
    sort($numero);
    echo "<br>Array ordenado ASCENDENTE:<br>";
    foreach ($numero as $num) {
        echo $num . "<br>";
    }
    // Al utilizar rsort(), se ordena el array de forma descendente.
    // La función rsort() también ordena los elementos del array en su lugar.
    rsort($numero);
    echo "<br>Array ordenado DESCENDENTE:<br>";
    foreach ($numero as $num) {
        echo $num . "<br>";
    }
    // 3. Mostrar la longitud del array.
    // Utilizar la función count() para obtener el número de elementos en el array.
    // La función count() devuelve el número de elementos en un array.
    // Por ejemplo, si el array tiene 5 elementos, count($numero) devolverá 5.
    $longitud = count($numero);
    echo "<br>Longitud del array: " . $longitud . "<br>";

    // 4. Buscar un número en el array.
    // Utilizar la función in_array() para verificar si un número está presente en el array.
    // La función in_array() devuelve true si el valor se encuentra en el array, de lo contrario devuelve false.
    $buscar = 10; // Cambia este valor para buscar otro número.
    if (in_array($buscar, $numero)) {
        echo "<br>El número $buscar está en el array.<br>";
    } else {
        echo "<br>El número $buscar no está en el array.<br>";
    }
?>