$(document).ready(function() {
  
    // Test
    console.log('jquery esta ejecutandose!',prodId);
    listarProductos();
    // Actualizar estado de producto a entregar
    function entregarProducto(id) {
      if(confirm('Esta seguro que se va a entregar el producto?')) {
        
        $.post('actualizarProducto.php', {id_detalle:id}, (response) => {
          listarProductos();
        });
      }
    };

    

  
    // Listar Productos
    function listarProductos() {
      console.log("el numero es:",prodId);
      $.ajax({
        url: 'listaProductos.php',
        type: 'GET',
        data:{"prodId":prodId},
        success: function(response) {
          //if(response!=null){ 
          const Productos = JSON.parse(response);
          //console.log(response);
          
          let template = '';
          Productos.forEach(prod => {
                  var fechaEntrega =prod.fecha_entrega==null? " ":prod.fecha_entrega;
                  //console.log(fechaEntrega);
                  template += `
                    <tr>
                    <td>${prod.idproducto}</td>
                    <td>${prod.nom_producto}</td>
                    <td>${prod.cantidad_producto}</td>
                    <td>${prod.estado}</td>
                    <td>${fechaEntrega}</td>
                    <td>
                      <button class="prod-update btn btn-success"  data-value=${prod.iddet_proforma}>
                       Actualizar 
                      </button>
                    </td>
                    </tr>
                  `
                  //console.log(prod);
          });
          $('#listaProductos').html(template);//}
          /*else{
            $('.div_product_table').html(template);
          }*/
        }
      });
    }
    /*$(document).on('click', '#btnEntregar', (e) => {
      var detId=$("#btnEntregar").data("value");
      console.log("el valor de detID: es : "+detId);
      if(confirm('Esta seguro que se va a entregar el producto?')) {
        console.log("inicio de la actualizacion");
        console.log("inicio de la actualizacion");
        $.post('actualizarProducto.php', {id_detalle:detId}, (response) => {
          listarProductos();
          console.log(response);
        });
        console.log("fin de la actualizacion");
      }
    });*/
    $(document).on('click', '.prod-update', (e) => {
      var element = $(this)[0].activeElement;
      var detId = $(element).data("value");
      console.log("el valor de detID: es : "+detId);
      if(confirm('Esta seguro que se va a entregar el producto?')) {
        console.log("inicio de la actualizacion");
        $.post('actualizarProducto.php', {id_detalle:detId}, (response) => {
          listarProductos();
          console.log(response);
        });
        console.log("fin de la actualizacion");
      }
    });

    
    $(document).on('click', '#finalizarEntrega', (e) => {
      var idBoleta = $("#finalizarEntrega").data("value");
      console.log("el valor de idBoleta: es : "+idBoleta);
      if(confirm('Esta seguro que se va a dar por finalizada la entrega?')) {
        console.log("inicio de la actualizacion de la boleta");
        $.post('actualizarBoleta.php', {idBoleta:idBoleta}, (response) => {
          listarProductos();
          console.log(response);
          $('#divAviso').html(response);
        });
        console.log("fin de la actualizacion de la boleta");
        
      }
    });
    
  
    
  });