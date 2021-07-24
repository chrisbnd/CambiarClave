<?
	class formulario
	{	
		public function encabezadoShow($titulo)
		{
			?>
			<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
			<title><? echo $titulo ?></title>
			</head>			
			<body>
			<h1>Mensaje de error</h1>
			<?
		}
		public function encabezadoShowInit($titulo)
		{
			?>
			<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
			<title><? echo $titulo ?></title>
			</head>			
			<body>
			<?
		}
		
		public function piePaginaShow()
		{
			?>
				<footer>King&Queen</footer>
				<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
			</body>
			</html>
			<?
		}	
	}
?>