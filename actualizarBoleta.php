  
<?php

$link = mysqli_connect("localhost:3307", "root", "root", "muebleria");
//echo "codigo de la boleta despachada".$_POST['idBoleta'];
if(isset($_POST['idBoleta'])) {
$idBoleta = $_POST['idBoleta'];
$FechaEntrega=date("Y-j-d h:i:s");
//echo $FechaEntrega;
$query = "UPDATE boleta SET estado_boleta = 'entregado', fecha_hora_desp ='$FechaEntrega' WHERE idboleta =".$idBoleta;
//$query = "SELECT * FROM detalle_prof  WHERE iddet_proforma =".$id_detalle;
$result = mysqli_query($link, $query);
//echo $result;
if (!$result) {
  die('Fallo la actualizacion de la boleta');
}
echo " Boleta Actualizada Satisfactoriamente"; 

}

?>