<?php

include("conexion.php");

$conn = conectar();

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios
        WHERE username = '$username' AND password = '$password'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0){

   	session_start();
    $_SESSION["admin"] = true;
    $_SESSION["usuario"] = $username;

    header("Location: admin/panel.php");
    exit();

}else{

    header("location: admin.php?error=1");

}

?>
