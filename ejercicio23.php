<!-- Crea una sesion que vaya aumentando su valor en uno o disminuyendo en uno en funcion de si el parámetro GET "counter" esta a uno a cero -->
 <!-- Caso de uso: ejercicio23.php?counter=1 para incrementar, ejercicio23.php?counter=0 para decrementar, ejercicio23.php?counter=reset para reiniciar el contador -->
<!-- Caso de uso: ejercicio23.php para ver el contador actual sin modificarlo -->
<?php
session_start();

// Inicializar el contador si no existe
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// Procesar las acciones del contador
if (isset($_GET['counter'])) {
    switch ($_GET['counter']) {
        case '1':
            $_SESSION['counter']++;
            break;
        case '0':
            if ($_SESSION['counter'] > 0) {
                $_SESSION['counter']--;
            }
            break;
        case 'reset':
            $_SESSION['counter'] = 0;
            break;
        default:
            echo "<p>Parámetro no válido. Use 1 para incrementar, 0 para decrementar o 'reset' para reiniciar.</p>";
            break;
    }
    
    if ($_GET['counter'] === '1' || $_GET['counter'] === '0' || $_GET['counter'] === 'reset') {
        header("Location: ejercicio23.php");
        exit();
    }
} else {
    echo "<p>No se ha pasado el parámetro 'counter'. Use 1 para incrementar, 0 para decrementar o 'reset' para reiniciar.</p>";
    echo "<p>El contador permanece en: " . $_SESSION['counter'] . "</p>";
}

// Agregar estilo para los botones
echo '<style>
    .btn {
        display: inline-block;
        padding: 8px 16px;
        margin: 0 5px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #45a049;
    }
    .btn-reset {
        background-color: #f44336;
    }
    .btn-reset:hover {
        background-color: #da190b;
    }
    .btn-reload {
        background-color: #008CBA;
    }
    .btn-reload:hover {
        background-color: #007399;
    }
</style>';

// Mostrar el valor y los controles
echo "<h2>Valor del contador: " . $_SESSION['counter'] . "</h2>";
echo '<form style="display: inline" action="ejercicio23.php" method="get">';
echo '<button type="submit" name="counter" value="1" class="btn">Incrementar contador</button>';
echo '<button type="submit" name="counter" value="0" class="btn">Decrementar contador</button>';
echo '<button type="submit" name="counter" value="reset" class="btn btn-reset">Reiniciar contador</button>';
echo '<button type="submit" class="btn btn-reload">Recargar página</button>';
echo '</form>';
?>