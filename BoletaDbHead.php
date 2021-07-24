<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
			<title>Entregar Productos</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    <style>
      .div_product_table {
        border:1px solid black;
        border-radius:10px;
        height:60vh;
      }
      th{
        border-bottom:1px solid black;
        width: calc(100%/6);
      }
      td{
        border-bottom:1px solid black;
      }
    </style>
			</head>			
			<body>

      <?
      $boton = $_POST['btnBuscarBoleta'];
      $idBoleta =$_POST['inputBoleta'];
      ?>
<script>
  var prodId=<?echo $idBoleta?> ;
  console.log(prodId);
</script>  


<div class=" py-3 row">
<div class="col-md-7 "><h1 class="float-end" id="prodId">N° Boleta: <?echo $idBoleta?></h1></div>
<div class="col-md-5 text-center"><button id="finalizarEntrega" data-value=<?echo $idBoleta?> class="btn btn-danger" >Finalizar entrega</button></div></div>
<div class="col-md-5 text-center"><a class="btn btn-danger" href="index.php">Volver al panel Principal</a></div></div>
<div class="text-center row">
  <div class="col-md-2"></div>
  <div class="col-md-8"><div class="div_product_table">