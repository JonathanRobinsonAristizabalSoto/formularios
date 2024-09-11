<?php
session_start();

// Incluir el archivo de configuración
require_once '../../connections/config.php';

try {
    // ----------------------
    // Crear una conexión PDO
    // ----------------------
    $conexion = new PDO("mysql:host=$servidor;dbname=$nombre_db", $usuario_db, $password_db);

    // Configurar PDO para que lance excepciones en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ----------------------
    // Asignar variables
    // ----------------------
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // -----------------------------------
    // Consulta SQL para validar la clave
    // -----------------------------------
    
    // Preparar la consulta SQL para contar el número de usuarios que coinciden con el nombre y la clave proporcionados
    $consulta = $conexion->prepare("SELECT COUNT(*) AS existe FROM usuarios WHERE nombre = ? AND clave = ?");
    
    // Ejecutar la consulta con los parámetros proporcionados
    $consulta->execute([$usuario, $clave]);

    // Obtener el resultado de la consulta
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    // Procesar el resultado
    if ($resultado['existe'] > 0) {
        // Si el usuario existe, iniciar sesión y redirigir a la página de bienvenida
        $_SESSION['usuario'] = $usuario;
        header("Location: ../Home/home.php");
        exit();
    } else {
        // Si el usuario no existe, denegar acceso
        echo "Acceso denegado";
    }
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>