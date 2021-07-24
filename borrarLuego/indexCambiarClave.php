<?php
    $boton = $_POST['CambiarClave'];
	if(isset($boton))
	{
			include_once("./modeloseguridad/formPreguntarPassword.php");
            $formularioPregunta = new formPreguntarPassword;
            $formularioPregunta = formPreguntarPasswordShow();
	}
	else
	{
		include_once("./Shared/formMensajeSistema.php");
		$nuevoMensaje = new formMensajeSistema;
		$nuevoMensaje -> formMensajeSistemaShow("ACCESO NO PERMITIDO !!!","<a href='./index.php'>Volver al inicio</a>");
	}

?>

