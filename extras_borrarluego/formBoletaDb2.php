<?
include_once("./shared/formulario.php");
$ObjForm =new formulario;
$ObjForm -> encabezadoShowInit("algo");
$boton = $_POST['btnBuscarBoleta'];
$idBoleta =$_POST['inputBoleta'];
 
            echo $idBoleta;
    if(isset($boton)){
        if(isset($idBoleta)){
            include_once("getBoleta.php");
            $ObjgetBoleta = new getBoleta;
            $ObjgetBoleta -> encontrarBoleta($idBoleta);
}

}
$ObjForm -> piePaginaShow();

?>