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


<center>
    <table>
        <from method="post" action="login.php">
            <table>
                <tr>
                    <td colspan="2" style="background-color:#33A8DB; padding-bottom:5px;"><label>Login</label></td>
                </tr>
                <tr>
                    <td algin="center" rowspan="5">
                        <a href="index.html">
                            <img src="Logo.png" />
                        </a>
                    </td>
                    <td><label>Usuari</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="Usuari1" /></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="txtpassword" /> </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Ingresa" /> </td>
                </tr>





            </table>
        </from>
</center>

</html>