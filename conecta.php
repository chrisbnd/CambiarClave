<?/*
	class conecta{
		protected function conectar()
		{
			$servername = "localhost:3307";
			$username = "root";
			$password = "root";
			$db="muebleria";
			// Create connection
			
			// Check connection
			if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			else{
				echo "Si se conecto a la BD <br>";
			}
		}
		protected function desconectar()
		{	// Close connection
			mysqli_close($link);
		}
	}*/
?>

  
<?php

$link = mysqli_connect("localhost:3307", "root", "root", "muebleria");
// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>