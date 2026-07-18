<?php

require_once("CRUD_Compras.php");

$crud = new compras();

$compras = $crud->read();

?>

<h5 class="fw-bold text-primary mb-3">
    Compras registradas
</h5>

<table class="table table-striped table-hover table-bordered">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Proveedor</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>

    <tbody>

        <?php while($fila = mysqli_fetch_assoc($compras)){ ?>

            <tr>

                <td><?php echo $fila["id"]; ?></td>

                <td><?php echo $fila["proveedor_id"]; ?></td>

                <td><?php echo $fila["producto_id"]; ?></td>

                <td><?php echo $fila["cantidad"]; ?></td>

                <td><?php echo $fila["fecha_compra"]; ?></td>

                <td>

                    <a
                        href="editar_compra.php?id=<?php echo $fila["id"]; ?>"
                        class="btn btn-warning btn-sm">
                        Editar
                    </a>
               	</td>
                    
				<td>
                    <a
                        href="eliminar_compra.php?id=<?php echo $fila["id"]; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Desea eliminar esta compra?');">
                        Eliminar
                    </a>

                </td>

            </tr>

        <?php } ?>

    </tbody>

</table>