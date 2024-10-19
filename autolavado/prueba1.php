
<?php
$servername = "127.0.0.1";
$username = "dba_autolavado";
$password = "autolavado";
$dbname = "autolavado";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Conexion fallida: ".$conn->conect_error);
}

/*
$sql = "INSERT INTO servicios(nombre_servicio, descripcion, duracion, precio, descuento) ".
        "VALUES ('Aspirado de autos pequeños','Se aspiran los carros pequeños con la aspiradora.',2,5,0)";

$conn->query($sql);

*/
//echo("Valor añadido.");

$resultados = $conn->query("SELECT * FROM servicios");

echo("<ul>");
while($fila = $resultados->fetch_assoc()){
    echo("<li>".$fila["nombre_servicio"]." - ".$fila["precio"]." $</li>");
}
echo("</ul>");

$conn->close();

?>