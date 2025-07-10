<!-- CREAR UN ARRAY LLAMADO MESES Y QUE ALMACENE EL NOMBRE DE LOS DOCE MESES DEL AÑO-->
<!-- RECORRERLO CON FOR PARA MOSTRAR POR PANTALLA LOS DOCE MESES -->
<h1>EJERCICIO 06</h1>
<?php
    // ejercicio06.php
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
    // Recorrer el array meses con un bucle for.
    // Utilizar count($mese) para obtener el número de elementos en el array.
    for ($i = 0; $i < count($meses); $i++) {
        echo $meses[$i]."<br>";
    }
?>