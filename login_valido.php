<?php

include("conexion.php");

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios
        WHERE username = '$username' AND password = '$password'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0){

    header("location: panel.php");

}else{

    header("location: admin.php?error=1");

}

?>
