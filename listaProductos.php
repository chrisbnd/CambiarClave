  
<?php
$prodId=$_GET['prodId'];
$link = mysqli_connect("localhost:3307", "root", "root", "muebleria");
     $sql = "SELECT dp.iddet_proforma, pro.idproducto , pro.nom_producto , dp.cantidad_producto ,dp.estado,dp.fecha_entrega FROM boleta b , proforma p , detalle_prof dp , producto pro WHERE b.idproforma = p.idproforma and dp.idproforma = p.idproforma and dp.idproducto=pro.idproducto and b.idboleta=".$prodId;
$result = mysqli_query($link, $sql);
if(!$result) {
  die('Query Failed'. mysqli_error($link));
}
//if($result){
$json = array();
while($row = mysqli_fetch_array($result)) {
  //$fecha_entrega=$row['fecha_entrega'];
//$fecha_entrega=$fecha_entrega=="NULL" ? " " : $fecha_entrega;
  $json[] = array(
    'idproducto' => $row['idproducto'],
    'iddet_proforma' => $row['iddet_proforma'],
    'nom_producto' => $row['nom_producto'],
    'cantidad_producto' => $row['cantidad_producto'],
    'estado' => $row['estado'],
    'fecha_entrega' => $row['fecha_entrega']
  );
}
$jsonstring = json_encode($json);
echo $jsonstring;/*
else{
    echo "  <h6>Lo sentimos la boleta no existe</h6>  <br>"
    echo "<a href='./index.php'>Volver al inicio</a>"
    
}*/
?>