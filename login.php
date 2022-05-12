<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "botiga";

$conn = new mysqli($servername, $username,$password,$dbname);

if(isset($_POST['username'])){
$uname=$_POST['username'];
$password=$_POST['password'];
$sql="select * from login from where User='".$uname."' AND Pass='".$password."' limit 1";
$result=$conn->query($sql);

if($result->num_rows==1){
    $conn->close();
    header("Location: main_page.php");
    exit;
}

else{
    
    ?><div id="logincorrecta" style="display:flex;position:absolute;width:300px;height:40px;background:blue"
    exit();
}
}
?>