<!-- igual que el ejercicio 06 pero usando foreach() -->
<h1>EJERCICIO 07</h1>
<?php
    // ejercicio07.php
    // Crear un array llamado meses que almacene los nombres de los doce meses del año.
    // Luego, recorrerlo con un bucle for para mostrar por pantalla los doce meses.
    $meses = array(
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    );
    // Recorrer el array meses con un bucle foreach.
    // Utilizar foreach para iterar sobre cada elemento del array.
    foreach ($meses as $mes) {
        echo $mes."<br>";
    }
?>