<?php

//en la DB debe existir el user y pass por ejemplo
// user: papa
// pass: papa
//ejecutar en la db como root: (se puede ingresar con mysql --user=root)
// ALTER USER 'papa'@'localhost' IDENTIFIED WITH mysql_native_password BY 'papa';


$servername = "172.30.59.120";  //reemplzar la IP de la base mysql
$username = "papa";             //reemplazar user de conexion a la DB
$password = "papa";             //reemplazr pass del user de conexion a la DB

echo "<br> - servername: " . $servername;
echo "<br> - username: " .  $username;
echo "<br> - password: " . $password;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}
echo "OK";
?>
