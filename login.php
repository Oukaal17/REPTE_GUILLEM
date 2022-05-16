<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $sql="select * from loginfrom where User='".$uname."'AND Pass='".$password."' limit 1";
  $result=$conn->query($sql);


  if($result->num_rows==1){
    $conn->close();
    header("Location: index.html");
    exit;
  }
  else{
    ?><div id="loginincorrecte" style="display:flex;position:absolute;width:300px;height:40px;background-color:#E5A3A4;align-items:center;justify-content:center;border-radius:50px;color:red;font-size:1.5rem;top:66%;left:50vw;transform:translate(-50%,-50%);">Login Incorrecte</div><?php
    exit();
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <from action="validar.php" method="post">
    <h1> Sistema de Login</h1>
    <p> Usuari <input type="text" placeholder="Ingresa el Nom" name="usuari"></p>
    <p> Contrasenya <input type="password" placeholder="ingresa la contrasenya" name="contrasenya"></p>
    <input type="submit" value="Ingresar">
    

</from>    
</body>
</html>