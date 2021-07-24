<?php
	include_once("formulario.php");
	class formMensajeSistema extends formulario
	{
		public function formMensajeSistema()
		{
			$this -> encabezadoShow("Mensaje del sistema");
		}
		public function formMensajeSistemaShow($mensaje,$enlace)
		{
			?>
			<table width="313" border="0" align="center">
              <tr>
                <td width="129" rowspan="3" align="center" valign="middle"><img src="./img/alert.png" width="100" height="100"></td>
                <td align="center">Mensaje</td>
              </tr>
              <tr>
                <td height="52" align="center"><hr><?php echo $mensaje; ?><hr></td>
              </tr>
              <tr>
                <td align="center"><?php echo $enlace; ?></td>
              </tr>
            </table>
			<?php
			$this -> piePaginaShow();
		}
	}
?>