<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/css/custom.css"> <!-- Enlace al archivo de estilos personalizado -->
    <title>Registro</title>
</head>

<body class="d-flex flex-column min-vh-100">
<header class="bg-primary text-white p-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h2 mb-0">Bienvenido a Nuestra Aplicación</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="../../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

    <div class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center mb-4">Registro de Usuario</h2>
        <div class="col-md-6 col-lg-4">
            <section class="card p-4">
                <form action="./register_process.php" method="post">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="clave">Clave</label>
                        <input type="password" class="form-control" id="clave" name="clave" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmar_clave">Confirmar Clave</label>
                        <input type="password" class="form-control" id="confirmar_clave" name="confirmar_clave" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </form>
                <p class="text-center mt-3">
                    <a href="login.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
                </p>
            </section>
        </div>
    </div>

    <?php include '../../../src/includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>