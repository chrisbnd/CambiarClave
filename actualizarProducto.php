  
<?php

$link = mysqli_connect("localhost:3307", "root", "root", "muebleria");
echo "codigo del producto recibido".$_POST['id_detalle'];
if(isset($_POST['id_detalle'])) {
$id_detalle = $_POST['id_detalle'];
$FechaEntrega=date("Y-j-d h:i:s");
echo $FechaEntrega;
$query = "UPDATE detalle_prof SET estado = 'entregado', fecha_entrega ='$FechaEntrega' WHERE iddet_proforma =".$id_detalle;
//$query = "SELECT * FROM detalle_prof  WHERE iddet_proforma =".$id_detalle;
$result = mysqli_query($link, $query);
echo $result;
if (!$result) {
  die('Fallo la actualizacion.');
}
echo " Producto Actualizado Satisfactoriamente"; 

}

?>