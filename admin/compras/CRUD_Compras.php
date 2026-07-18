<?php

require_once("../../conexion.php");

class compras {

    private $con;

    public function __construct() {
        $this->con = conectar();}


    public function create($proveedor_id, $producto_id, $cantidad, $fecha_compra) {

        $sql = "INSERT INTO compras (proveedor_id, producto_id, cantidad, fecha_compra)
                VALUES ('$proveedor_id', '$producto_id', '$cantidad', '$fecha_compra')";

        return mysqli_query($this->con, $sql);
    }

    public function read() {
        $sql = "SELECT * FROM compras";
        return mysqli_query($this->con, $sql);
    }

    public function find($id) {
		$sql = "SELECT * FROM compras WHERE id = '$id'";
        $res = mysqli_query($this->con, $sql);
        return mysqli_fetch_assoc($res);
    }

    public function delete($id) {
        $sql = "DELETE FROM compras WHERE id = '$id'";
        return mysqli_query($this->con, $sql);
    }
    
    public function update($id, $proveedor_id, $producto_id, $cantidad, $fecha_compra) {

    $sql = "UPDATE compras
            SET proveedor_id='$proveedor_id',
                producto_id='$producto_id',
                cantidad='$cantidad',
                fecha_compra='$fecha_compra'
            WHERE id='$id'";

    return mysqli_query($this->con, $sql);
	}
    
}
?>