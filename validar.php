<?php
$usuario=$_POST['usuario'];
$contrasenya=$_POST['contrasenya'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","marc123","login");


$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasenya='$contrasenya'";
$resultat=mysqli_query($conexio,$consulta);

$filas=mysqli_num_rows($resultat);
if($filas){
    header("location:home.php"):
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad"> ERRO LOGIN </h1>
    <?php
}


mysqli_free_result($resultat)
mysqli_close($conexio)



