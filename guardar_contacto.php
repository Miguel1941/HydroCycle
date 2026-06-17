

<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO clientes(nombre, correo, telefono, direccion)
VALUES('$nombre', '$correo', '$telefono', '$direccion')";

if(mysqli_query($conn, $sql)){

    echo "
    <script>
        alert('Datos guardados correctamente');
        window.location='contacto.html';
    </script>
    ";

} else {

    echo "Error: " . mysqli_error($conn);

}

?>

