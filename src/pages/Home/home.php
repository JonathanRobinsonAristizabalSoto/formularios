<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: ../../pages/Auth/login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/css/custom.css"> <!-- Enlace al archivo de estilos personalizado -->
    <title>Bienvenida</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="bg-primary text-white p-3 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h2 mb-0">Nuestra Aplicación</h1>
            <a href="../Auth/logout.php" class="btn btn-danger">Cerrar sesión</a>
        </div>
    </header>

    <main class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center mb-4">Hola, <?php echo htmlspecialchars($usuario); ?>!</h2>
        <p class="text-center">Te damos la bienvenida.</p>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>