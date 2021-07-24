<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Despachar Boleta</title>
</head>
<body>
    <div class="div_head">
       <h1 class="text-center">Buscar Boleta por codigo</h1> 
    </div>
    <div class="row">
    <div class="col-md-3"></div>
       <div class="div_form col-md-6 px-auto text-center mt-5">
        <button  class="btn btn-danger float-end" type="submit">Cerrar sesion-(volver)</button>
        <button  class="btn btn-danger float-end" type="submit">volver</button>
        <div class="pt-5">
            <form action="formBoletaDb.php" method="post">
                <input class="py-2 px-5" type="text" name="inputBoleta" id="inputBoleta">
                <input class="btn btn-success" name="btnBuscarBoleta" type="submit" value="buscar boleta">
            </form>
              
        </div>
        
        </div> 
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>