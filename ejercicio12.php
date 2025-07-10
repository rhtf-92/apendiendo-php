<!-- Escribe un programa que muestre la direccion IP del usuario que sisita nuestra web y si uda Firefox darle la enhorabuena. -->
<h1>EJERCICIO 12</h1>
<?php
    // ejercicio12.php
    // Obtener la dirección IP del usuario.
    $ip = $_SERVER['REMOTE_ADDR'];
    echo "Tu dirección IP es: " . $ip . "<br>";
    
    // Verificar si el navegador es Firefox.
    // Utilizar la variable $_SERVER['HTTP_USER_AGENT'] para obtener información del navegador.
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    
    // Comprobar si la cadena 'Firefox' está presente en la cadena del agente de usuario.
    // La función strpos() devuelve la posición de la primera aparición de una subcadena en una cadena.
    // Si la subcadena no se encuentra, devuelve false.
    if (strpos($navegador, 'Firefox') !== false) {
        echo "¡Enhorabuena! Estás usando Firefox.";
    } else {
        echo "No estás usando Firefox.";
    }
?>