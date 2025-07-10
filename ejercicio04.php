<!-- MOSTRAR LA MULTIPLICACION DE LOS n PRIMEROS NUMEROS NATURALES. -->
<h1>EJERCICIO 04</h1>
<?php
        // ejercicio04.php
        $numero = 1;
        $contador = 2;
        while($contador<=20){
            // Multiplicamos el número por el contador y luego incrementamos el contador.
            $numero *= $contador;
            echo $numero."</br>";
            $contador++;
        }
        echo "El resultado de la multiplicación de los 20 primeros números naturales es: ".$numero;
?>