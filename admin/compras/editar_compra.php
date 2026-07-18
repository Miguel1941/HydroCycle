<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

if(!isset($_SESSION["admin"])){
    header("Location: ../../admin.php");
    exit();
}

require_once("CRUD_Compras.php");

$crud = new compras();

$id = $_GET["id"];

$compra = $crud->find($id);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST["id"];

    $proveedor_id = $_POST["proveedor_id"];
    $producto_id  = $_POST["producto_id"];
    $cantidad     = $_POST["cantidad"];
    $fecha_compra = $_POST["fecha_compra"];

    $crud->update(
        $id,
        $proveedor_id,
        $producto_id,
        $cantidad,
        $fecha_compra
    );

    header("Location: compras.php");
    exit();

}

?>

<form method="POST">

	<div class="col">
    	Proveedor
     	<input
        	type="text"
          	class="form-control"
          	placeholder="Nombre de la empresa"
           	name="proveedor_id"
            value="<?php echo $compra["proveedor_id"]; ?>"
          	required
       	>
        </div>

        <br>

        <div class="col">
        	Producto
          	<input
          		type="text"
              	class="form-control"
              	placeholder="Nombre del producto"
               	name="producto_id"
               	value="<?php echo $compra["producto_id"]; ?>"
              	required
         	>
     	</div>

      	<br>

     	<div class="col">
        	Cantidad
          	<input
            	type="number"
                class="form-control"
               	placeholder="Cantidad que se compró"
              	name="cantidad"
                value="<?php echo $compra["cantidad"]; ?>"
              	required
          	>
      	</div>

      	<br>

       	<div class="col">
        	Fecha de compra
          	<input
            	type="date"
              	class="form-control"
              	name="fecha_compra"
                value="<?php echo $compra["fecha_compra"]; ?>"
              	required
         	>
      	</div>
    
    	<input
    		type="hidden"
    		name="id"
    		value="<?php echo $compra["id"]; ?>"
     	>

        <br>

      	<button
         	type="submit"
           	class="btn btn-primary w-100">
          	Guardar compra
      	</button>

</form>