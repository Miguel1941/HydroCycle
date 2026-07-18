<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: admin.php");
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
    <link rel="stylesheet" href="../style.css">

</head>

    
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2 class="logo">
            HydroCycle
        </h2>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link active" href="panel.php">
                    Inicio
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="compras/compras.php">
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
                <a class="nav-link text-danger" href="logout.php">
                    Cerrar sesión
                </a>
            </li>

        </ul>

    </div>

    <!-- CONTENIDO -->
    <div class="content">

        <div class="container-fluid">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4">

                    <h1 class="text-primary">
                        Panel de Administración
                    </h1>

                    <hr>

                    <p>
                        Bienvenido,
                        <strong><?php echo $_SESSION["usuario"]; ?></strong>.
                    </p>

                    <p>
                        Has iniciado sesión correctamente.
                    </p>

                    <p>
                        Desde este panel podrás administrar toda la información del sistema HydroCycle.
                    </p>

                </div>

            </div>

        </div>
        
    </div>
</body>

</html>