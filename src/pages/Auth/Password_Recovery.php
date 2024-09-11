<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <h2>Recuperar Contraseña</h2>
    <section>
        <form action="../../includes/password_recovery_process.php" method="post">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required> <br> <br>
            <input type="submit" value="Recuperar Contraseña">
        </form>
        <p><a href="login.php">Volver al Login</a></p>
    </section>
</body>
</html>