<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../../admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HydroCycle - Panel de Administración</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Tu CSS -->
    <link rel="stylesheet" href="../../style.css">

</head>

    
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2 class="logo">
            HydroCycle
        </h2>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link" href="../panel.php">
                    Inicio
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="compras.php">
                    Compras
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    Clientes
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    Contactos
                </a>
            </li>

            <li class="nav-item mt-4">
                <a class="nav-link text-danger" href="../logout.php">
                    Cerrar sesión
                </a>
            </li>

        </ul>

    </div>

    <!-- CONTENIDO -->

    
	<div class="content">
        
        <div class="card shadow-sm border-0">
            <div class= "card-body p-4">
            	<h2 class="text-primary">Gestión de Compras</h2>
            	<p>Administra las compras registradas en el sistema.</p>
        	</div>
        </div>
        
        <BR>
        <div class="row">
        
            <div class="col-md-4">
                <?php include("formulario_compras.php"); ?>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        Contenedor 2
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        Contenedor 3
                    </div>
                </div>
             </div>
            
        </div>
        <br>
        <div class="col-md-12">
            <?php include("mostrar_compras.php"); ?>
        </div>
    
	</div>
 
</body>

</html>
