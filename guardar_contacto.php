

<?php

include("conexion.php");

$conn = conectar();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO clientes(nombre, correo, telefono, direccion)
VALUES('$nombre', '$correo', '$telefono', '$direccion')";

if(mysqli_query($conn, $sql)){

    header("Location: contacto.php?ok");
    exit();

} else {

    header("Location: contacto.php?error");
    exit();

}

?>

