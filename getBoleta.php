<?php

include_once("./Shared/formMensajeSistema.php");
class getBoleta {
 
   
    public function encontrarBoleta($id)
    { $link = mysqli_connect("localhost:3307", "root", "root", "muebleria");
     $sql = "SELECT * FROM boleta where idboleta=".$id;
       if($result = mysqli_query($link,$sql)){
          if(mysqli_num_rows($result) >0){
              echo "<table >";
                  echo "<thead>";
                  
                      echo "<th>idproducto</th>";
                      echo "<th>Producto</th>";
                      echo "<th>Cantidad</th>";
                      echo "<th>Estado</th>";
                      echo "<th>fecha de entrega</th>";
                      echo "<th>Entregar</th>";
                  echo "</thead>";
                  echo "<tbody id="."listaProductos".">";
                  echo "</tbody>";
                  //echo "<tr id="."listaProductos"."></tr>"
              /*while($row = mysqli_fetch_array($result)){
                  
                      
                      /*echo "<td>" . $row['nom_producto'] . "</td>";
                      echo "<td>" . $row['cantidad_producto'] . "</td>";
                     // echo "<td>" . $row['precio_producto'] . "</td>";
                      echo "<td><button class="."btn-success".">Entregar</button></td>";
                      echo "<td></td>";
                  
              }*/
              echo "</table>";
          }
         
      }   

        
      
    }
}



?>
