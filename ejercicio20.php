<!-- Utiliza la funcion filter_var() para comprobar si el email que nos llega por la URL es un email valido. Implementar la validacion a traves de una funcion qu reciba un parametro email -->
<?php
function validarEmail($email) {
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "El email $email es válido.";
    } else {
        $status = "El email $email no es válido.";
    }
    return $status;
}
$email = "";
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
echo validarEmail($email);
?>