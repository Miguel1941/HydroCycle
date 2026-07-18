<?php

require_once("CRUD_Compras.php");

$mensaje = "";
$tipo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $crud = new compras();

    $proveedor_id = $_POST["proveedor_id"];
    $producto_id  = $_POST["producto_id"];
    $cantidad     = $_POST["cantidad"];
    $fecha_compra = $_POST["fecha_compra"];

    if ($crud->create($proveedor_id, $producto_id, $cantidad, $fecha_compra)) {
        $mensaje = "Datos guardados correctamente.";
        $tipo = "success";
    } else {
        $mensaje = "Error al guardar los datos.";
        $tipo = "danger";
    }
}

?>

<div class="card shadow-sm h-100">
    <div class="card-body">

        <h5 class="fw-bold text-primary">
            Ingresar nueva compra
        </h5>

        <?php if($mensaje != ""){ ?>
            <div class="alert alert-<?php echo $tipo; ?> mt-3">
                <?php echo $mensaje; ?>
            </div>
        <?php } ?>

        <form method="POST">

            <div class="col">
                Proveedor
                <input
                    type="text"
                    class="form-control"
                    placeholder="Nombre de la empresa"
                    name="proveedor_id"
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
                    required
                >
            </div>

            <br>

            <button
                type="submit"
                class="btn btn-primary w-100">
                Guardar compra
            </button>

        </form>

    </div>
</div>