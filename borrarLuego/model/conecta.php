<?
	class conecta{
		protected function conectar()
		{
			mysql_connect("localhost","root","root");
			mysql_select_db("muebleria");
		}
		protected function desconectar()
		{
			mysql_close();
		}
	}
?>