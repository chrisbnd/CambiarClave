

<?
include_once("./shared/formMensajeSistema.php");
//$ObjForm =new formulario;
//$ObjForm -> encabezadoShowInit("algo");
$boton = $_POST['btnBuscarBoleta'];
$idBoleta =$_POST['inputBoleta'];
    if(isset($boton)){
        if(isset($idBoleta)){
          include_once("BoletaDbHead.php");
          
            include_once("getBoleta.php");
            $ObjgetBoleta = new getBoleta;
            $ObjgetBoleta -> encontrarBoleta($idBoleta);

          include_once("BoletaDbPie.php");
    }
      

  }
  else{
    $objMensajeBoletaError=  new formMensajeSistema;
        $objMensajeBoletaError -> formMensajeSistemaShow("Acceso no permitido, Vuelva a la pagina principal","<a href='./index.php'>Volver al inicio</a>");
}





?>
