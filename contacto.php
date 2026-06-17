<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroCycle - Contacto</title>

    <!-- Bootstrap -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2 class="logo">HydroCycle</h2>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    Inicio
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="costos.html">
                    Costos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="contacto.php">
                    Contacto
                </a>
            </li>

            <!-- ADMIN -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    Admin
                </a>
            </li>
            

        </ul>

    </div>

    <!-- CONTENIDO -->
    <div class="content d-flex justify-content-center align-items-center">
    
    <?php

        if(isset($_GET['ok'])){

            echo "
            <div class='alert alert-success'>
                Datos guardados correctamente.
            </div>
            ";

        }

        if(isset($_GET['error'])){

            echo "
            <div class='alert alert-danger'>
                Error al guardar los datos.
            </div>
            ";

        }

        ?>

        <div class="card shadow p-4" style="max-width: 500px; width: 100%;">

            <h2 class="text-center mb-3">Contáctanos</h2>

            <p class="text-center text-muted mb-4">
                Déjanos tus datos y nos pondremos en contacto contigo.
            </p>
            
            
            

            <form action="guardar_contacto.php" method="POST">

                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        Nombre completo
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                        placeholder="Ej: Juan Pérez"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        class="form-control"
                        placeholder="ejemplo@gmail.com"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">
                        Teléfono
                    </label>

                    <input
                        type="tel"
                        id="telefono"
                        name="telefono"
                        class="form-control"
                        placeholder="300 123 4567"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">
                        Dirección
                    </label>

                    <input
                        type="text"
                        id="direccion"
                        name="direccion"
                        class="form-control"
                        placeholder="Ej: Calle 10 #20-30"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Enviar información
                </button>

            </form>

        </div>

    </div>

</body>
</html>