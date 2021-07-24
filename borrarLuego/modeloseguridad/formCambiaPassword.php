<?php

include_once("./shared/formulario.php");
	class formAutenticarUsuario extends formulario
	{
		public function formAutenticarUsuario()
		{
			$this -> encabezadoShowIni("autenticacion de usuario");
		}
        public function formAutenticarUsuarioShow()
        {
        ?>
        <html>

        <head>
            <title>Preguntar Password</title>
        </head>

        <body>
            <p>Nueva contraseña:</p>
            <input type="text" name="new_password">
            <p>Confirmar contraseña:</p>
            <input type="text" name="repet_password">
            <br>
            <input class="botons" type="submit" value="Cambiar_contraseña">


        </body>

        </html>

        <?php

            $this -> piePaginaShow();
        }



?>
