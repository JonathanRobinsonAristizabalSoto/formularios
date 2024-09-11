<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Página Principal</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include './src/includes/header.php'; ?>

    <main class="container flex-grow-1 d-flex align-items-center justify-content-center">
        <section class="text-center">
            <p class="lead">Esta es la página principal de nuestra aplicación. Por favor, registrese o inicie sesion para continuar.</p>
        </section>
    </main>

    <?php include './src/includes/footer.php'; ?>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>