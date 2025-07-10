<!-- Escribe un programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto en minusculas y mostrarlo convertido a mayusculas en negrita -->
<h1>EJERCICIO 14</h1>
<?php
    // ejercicio14.php
    
    $texto = ""; // Inicializar la variable como vacía.

    // Comprobar si la variable $texto está vacía.
    // Utilizar la función empty() para verificar si la variable no contiene ningún valor.
    if (empty($texto)) {
        // Si la variable está vacía, asignar un texto en minúsculas.
        $texto = "este es un texto de relleno";
        echo "ORIGINAL: $texto<br>";
        // Convertir el texto a mayúsculas y mostrarlo en negrita.
        // Utilizar strtoupper() para convertir el texto a mayúsculas.
        $texto_mayusculas = strtoupper($texto);
        // Mostrar el texto en negrita utilizando la etiqueta <strong>.
        echo "<strong>$texto_mayusculas</strong><br>";

    }else {
        // Si la variable no está vacía, mostrar un mensaje indicando que ya tiene contenido.
        echo "La variable ya tiene contenido: $texto<br>";
    }
?>