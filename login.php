<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass ="";
$dbname ="test";

$conn = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (!$conn)
{
    die("No tenim conexio:".mysqli_connect_error());
}
$nombre = $_POST["txtusuaio"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='".$nombre"' and password = '".$pass"'" );
$nr = mysqli_num_rows($query);

if($nr == i)
{
    //header("Location: pagina.html"
    echo "Bienvenido:" .$nombre;

}
else if ($nr == 0)
{
    echo: "Cap Ingress";
}







?>