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
			<?php echo $mensaje; ?>
			<?php echo $enlace; ?>
			<?php
			$this -> piePaginaShow();
		}
	}
?>