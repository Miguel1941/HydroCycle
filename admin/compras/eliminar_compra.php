

<?php
    

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../../admin.php");
	exit();
}
require_once("CRUD_Compras.php");

$crud = new compras(); 

$id = $_GET["id"];

$crud -> delete($id);
    
header("location: compras.php");
exit();

?>

