</div></div>

</div>
<div class="text-center">
  <h1 id="divAviso"></h1>
</div>

    <!-- Frontend Logic -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="app3.js">
      $('#btnEntregar').on('click', function (e) {
      /*var detId=$(this).data("value");
      if(confirm('Esta seguro que se va a entregar el producto?')) {
        
        $.post('actualizarProducto.php', {id_detalle:detId}, (response) => {
          listarProductos();
        });
      }*/
      alert("Your values are :"+ $(this).data("value"));        
     }); 
    </script>
    <script >
      
    </script>
<footer class="text-center mt-5"><h4>King&Queen</h4></footer>
				
			</body>
			</html>