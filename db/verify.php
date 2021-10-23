<?php

$email=$_POST['email'];
$password=$_POST['password'];

session_start();
$_SESSION['email']=$email;

$conexion =mysqli_connect("localhost","root","","login");

$query="SELECT*FROM users where email='$email' and password='$password'";
$results=mysqli_query($conexion,$query);


$rows=mysqli_num_rows($results);

if($rows){
    header("location:home.php");
}else{
    ?>
    <?php
    
    echo'<script language="javascript">
    alert("El usuario o contraseña son incorrectos");
    window.location.href="../index.php";
    </script>';

}

mysqli_free_result($results);
mysqli_close($conexion);


