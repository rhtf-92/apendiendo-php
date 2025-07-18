<!-- Crea una funcion a la que le pases un numero por parametro y calcules la tabla de multiplicar del 1 al 12 cada uno independientemente y que el numero se capture por el metodo GET -->
<?php
// Ejercicio 21: Tabla de multiplicar
// Esta función recibe un número y devuelve su tabla de multiplicar del 1 al 12.
function tablaMultiplicar($numero) {
    // Validar que el parámetro sea un número.
    if (!is_numeric($numero)) {
        return "Por favor, ingresa un número válido.";
    }
    // Generar la tabla de multiplicar.
    $numero = intval($numero);
    // Crear un array para almacenar los resultados.
    $resultado = [];

    // Mostrar el encabezado de la tabla.
    echo "La Tabla de Multiplicar del numero $numero: <br>";
    // Iterar del 1 al 12 para calcular la tabla de multiplicar.
    for ($i =1; $i <= 12; $i++){
        // Calcular el resultado de la multiplicación y agregarlo al array usando el formato "numero x i = resultado".
        // Usar el operador de concatenación para formar la cadena.
        $resultado[] = "$numero x $i = " . ($numero * $i);
    }
    // Devolver los resultados como una cadena.
    return implode("<br>", $resultado);
}
// Verificar si se ha enviado el parámetro 'numero' por GET.
if (isset($_GET['numero'])) {
    // Llamar a la función con el número recibido.
    $numero = $_GET['numero'];
    echo tablaMultiplicar($numero);
} else {
    // Si no se ha enviado el número, mostrar un mensaje.
    echo "Por favor, proporciona un número en la URL usando el parámetro 'numero'.";
}