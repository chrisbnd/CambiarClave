<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ensayo</h1>
    <?php
$servername = "localhost:3307";
$username = "root";
$password = "root";
$db="muebleria";
// Create connection
$link = mysqli_connect("localhost:3307", "root", "root", "muebleria");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM boleta where idboleta=2";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "1";
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

?>
    <h1>fin del ensayo</h1>
</body>
</html>



include_once....

$ObjConecta = new Conecta;
$Conexion = $ObjConecta -> conectar();
