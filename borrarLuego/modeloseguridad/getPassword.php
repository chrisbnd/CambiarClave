<?php
$password =$_POST["password"];

$password_leng=trim(strlen($password));

if ($password_leng < 8 ) {

    include_once("../Shared/formMensajeSistema.php");
    $nuevoMensaje = new formMensajeSistema;
    $nuevoMensaje -> formMensajeSistemaShow("Password debe tener mas de 8 caracteres !!!","<a href='./index.php'>Volver al inicio</a>");   
}
else{
    include_once("controllerCambiarClave.php");
}
?>