

<?php
$host = "sql210.infinityfree.com";
$user = "if0_41859642";
$pass = "FS05Kg2ZOSALO"; 
$db = "if0_41859642_hidrocycle_db"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

