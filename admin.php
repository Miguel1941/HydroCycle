<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HydroCycle - Administración</title>

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
                <a class="nav-link" href="contacto.php">
                    Contacto
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="admin.php">
                    Admin
                </a>
            </li>

        </ul>

    </div>

    <!-- CONTENIDO -->
    
    
    
    
    <div class="content d-flex justify-content-center align-items-center">
    	<div class="card shadow p-4" style="max-width: 500px; width: 100%;">
    
    	<div class="container-fluid">

            <h1 class="text-primary">
                Administración
            </h1>

            <p>
                Inicia sesión para acceder al panel de administración de HydroCycle.
            </p>
    	 </div>
    
    		<form action="login_valido.php" method="POST">

                <div class="mb-3">
                    <label for="username" class="form-label">
                        Usuario
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control"
                        placeholder="Ej: Admin"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="from-control"
                        placeholder="*****"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    INGRESAR
                </button>

            </form>
    	</div>
    </div>


</body>

</html>