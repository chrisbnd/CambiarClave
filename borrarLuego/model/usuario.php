<?
	include_once("conecta.php");
      class usuario extends conecta
      {

        public function password(){
          $SQL = ""
        }
        public function usuario()
        {
          $this -> conectar();
        }
        public function verificarUsuario($login,$password)
        {
          $SQL = "select * from usuarios where login = 1 and password = 1 and estado = 1";
          $resultado = mysql_query($SQL);
          $this -> desconectar();
          $filas = mysql_num_rows($resultado);
          if($filas == 1)
            return(1);
          else
            return(0);
        }*/
      }
?>