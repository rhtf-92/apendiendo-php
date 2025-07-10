<!-- Crea un script PHP que tenga tres variables, una de tipo array, otra de tipo string y otra boleana y que imprima un mensaje segun el tipo de variable que sea. -->
<h1>EJERCICIO 15</h1>
<?php
    // ejercicio15.php
    $matriz = array("PHP", "JavaScript", "Python");
    $texto = "Hola, soy un texto";
    $falso = false;

    // Comprobar el tipo de cada variable y mostrar un mensaje correspondiente.
    // Utilizar is_array() para verificar si es un array, is_string() para verificar si es una cadena de texto y is_bool() para verificar si es un booleano.

    // Comprobar si la variable $matriz es un array.
    // Utilizar la función is_array() para verificar si la variable es un array.
    if (is_array($matriz)) {
        // Si la variable es un array, mostrar un mensaje indicando que es un array.
        echo "La variable \$matriz es un array.<br>";
        // Mostrar el contenido del array utilizando implode() para convertirlo en una cadena.
        // La función implode() une los elementos de un array en una cadena, separándolos por una coma y un espacio.
        // Por ejemplo, si el array contiene "PHP", "JavaScript" y "Python", el resultado será "PHP, JavaScript, Python".
        echo "Contenido del array: " . implode(", ", $matriz) . "<br>";
    } else {
        // Si la variable no es un array, mostrar un mensaje indicando que no lo es.
        echo "La variable \$matriz no es un array.<br>";
    }

    // Comprobar si la variable $texto es una cadena de texto.
    // Utilizar la función is_string() para verificar si la variable es una cadena de texto.
    // La función is_string() devuelve true si la variable es una cadena de texto, de lo contrario devuelve false.
    // Si la variable es una cadena de texto, mostrar un mensaje indicando que es una cadena de texto.
    // Mostrar el contenido de la cadena de texto.
    if (is_string($texto)) {
        echo "La variable \$texto es una cadena de texto.<br>";
        echo "Contenido del texto: $texto<br>";
    } else {
        // Mostrar un mensaje indicando que la variable no es una cadena de texto.
        echo "La variable \$texto no es una cadena de texto.<br>";
    }

    // Comprobar si la variable $falso es un booleano.
    // Utilizar la función is_bool() para verificar si la variable es un booleano.
    // La función is_bool() devuelve true si la variable es un booleano, de lo contrario devuelve false.
    // Si la variable es un booleano, mostrar un mensaje indicando que es un booleano.
    // Mostrar el valor de la variable como 'true' o 'false'.
    if (is_bool($falso)) {
        echo "La variable \$falso es un booleano.<br>";
        echo "Valor de la variable: " . ($falso ? 'true' : 'false') . "<br>";
    } else {
        // Si la variable no es un booleano, mostrar un mensaje indicando que no lo es.
        echo "La variable \$falso no es un booleano.<br>";
    }
?>