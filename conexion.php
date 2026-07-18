
<?php

function conectar(){

    $host = "localhost";
    $user = "username";
    $pass = "password";
    $db   = "DB";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}

?>

