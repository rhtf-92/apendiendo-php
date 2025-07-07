<!-- ESCRIBE UN PROGRAMA QUE IMPRIMA POR PANTALLA LOS CUADRADOS PERFECTOS DE LOS 30 PRIMEROS NUMEROS -->
<h1>EJERCICIO 02</h1>
<?php
    $cuadradoperfecto;
    $i;
    for($i=1; $i<31; $i++){
        $cuadradoperfecto=$i*$i;
        echo "$i * $i = $cuadradoperfecto</br>";/// 1*1 = 1
        /// 2*2 = 4
    }
?>