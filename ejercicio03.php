<!-- IDENTIFICAR SI EL CUADRADO PERFECTO ES PAR O IMPAR -->
<h1>EJERCICIO 03</h1>
<?php
    $cuadradoperfecto;
    $i;
    for($i=1; $i<31; $i++){
        $cuadradoperfecto=$i*$i;
        if($cuadradoperfecto % 2 == 0){
            echo "$i * $i = $cuadradoperfecto PAR</br>";
        }
        echo "$i * $i = $cuadradoperfecto IMPAR</br>";
    }
?>