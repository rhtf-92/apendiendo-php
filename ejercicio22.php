<!-- Crea un programa que imprima las tablas de multiplicar del 1 al 12 para pasarle un parametro opcional que nos permita imprimir directamente la tabla en HTML, considera de la misma manera capturar el parametro por metodo GET. -->
<?php
// Esta función imprime la tabla de multiplicar de un número dado si el parámetro 'html' es verdadero, lo hace en formato HTML.
function imprimirTablaMultiplicar($numero, $formatoHTML = false) {
    // Definir el resultado como una cadena vacía
    $resultado = "";
    // Iterar del 1 al 12 para calcular la tabla de multiplicar
    for ($i = 1; $i <= 12; $i++) {
        // Calcular el producto
        $producto = $numero * $i;
        // Formatear el resultado según el tipo de salida
        if ($formatoHTML) {
            // Si es formato HTML, agregar una fila a la tabla
            $resultado .= "<tr><td>$numero x $i</td><td>$producto</td></tr>";
        } else {// Si es formato de texto plano, agregar una línea de texto
            // Concatenar el resultado a la cadena
            $resultado .= "$numero x $i = $producto</br>";
        }
    }
    // Retornar el resultado final
    return $resultado;
}
// Capturar el parámetro GET
$numero = isset($_GET['numero']) ? intval($_GET['numero']) : 1;
$formatoHTML = isset($_GET['html']) && $_GET['html'] === 'true';
// Imprimir la tabla de multiplicar
// Verificar si se debe imprimir en formato HTML
if ($formatoHTML) {
    // Iniciar la tabla HTML
    echo "<h2>Tabla de multiplicar del $numero</h2>";
    // Crear la tabla HTML
    echo "<table border='1'>";
    // Encabezados de la tabla
    echo "<tr><th>Multiplicación</th><th>Resultado</th></tr>";
    // Imprimir la tabla de multiplicar en formato HTML
    echo imprimirTablaMultiplicar($numero, true);
    // Cerrar la tabla HTML
    echo "</table>";
} else { // Imprimir la tabla de multiplicar en formato de texto plano
    // Imprimir el encabezado
    echo "<h2>Tabla de multiplicar del $numero</h2>";
    // Imprimir la tabla de multiplicar en formato de texto
    echo imprimirTablaMultiplicar($numero);
}
//caso de uso para imprimir en HTML: ejercicio22.php?numero=5&html=true
// caso de uso para imprimir en texto plano: ejercicio22.php?numero=5
?>