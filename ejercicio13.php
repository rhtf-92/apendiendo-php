<!-- Escribe un programa que añada valores a un array mientras que su longitud sea menor a 100 y despues que se muestre la informacion del array por pantalla. -->
<h1>EJERCICIO 13</h1>
<?php
    // ejercicio13.php
    
    // Inicializar un array vacío.
    $numeros = array();
    for ($i = 0; $i < 100; $i++) {
        //array_push($numeros, $i);
        $numeros["Array-{$i}"] = $i; // Añadir el valor de $i al array con una clave descriptiva.
    }
    // Mostrar la información del array por pantalla.
    // Utilizar var_dump() para imprimir la estructura y contenido del array.
    var_dump($numeros);
?>